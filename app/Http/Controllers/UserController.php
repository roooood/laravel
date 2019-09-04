<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\User; 
use App\Token; 
use Illuminate\Support\Facades\Auth; 
use Validator;
use JWTAuth;
// use Illuminate\Support\Facades\Session;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Tymon\JWTAuth\Facades\JWTFactory;

class UserController extends Controller
{
    public $successStatus = 200;

    public function Auth(Request $request){
         $validator = Validator::make($request->all(), [ 
            'phone' => 'required|regex:/(09)[0-9]{9}/', 
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
        $credentials = $request->only('phone');
        $user = User::firstOrCreate($credentials);//'firstOrCreate' or 'firstOrNew ->save()'

        Token::where('user_id',$user->id)
             ->update(['used'=>true]);

        $token = new Token;
        $token->user_id = $user->id;
        $token->save();

        return response()->json(['success' => true]); 
    }
    public function Active(Request $request){
         $validator = Validator::make($request->all(), [ 
            'phone' => 'required|regex:/(09)[0-9]{9}/', 
            'code' => 'required|regex:/[0-9]{5}/', 
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
        $user = User::where('phone',$request->phone)
                    ->first();
        if($user){
            $token = $user->tokens()
                          ->where('used',false)
                          ->where('code',$request->code)
                          ->first();
            if($token){
                $token->used = true;
                $token->save();
                $user_data = [
                    'id' => $user->id
                ];
                $factory = JWTFactory::customClaims([
                    'sub'   => 'user',
                    'ttl'   => env('JWT_TTL', null),
                    'user'  => $user_data
                ]);
                $payload = $factory->make();
                $token = JWTAuth::encode($payload)->get();

                return response()->json([
                    'success' => true,
                    'data' =>[
                        'token' => $token   
                    ]
                ])->withCookie(cookie()->forever('token',$token)); 
            }
            
           
        }
        
        return response()->json(['success' => false]); 
    }
    public function Me(Request $request){
        
        return response()->json(['success' => $request->user]); 
    }
}
