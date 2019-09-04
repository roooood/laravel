<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\User; 
class UserPanelContoroller extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index(Request $request)
    {
        $user = User::find($request->user->id);
        //$user = $users->username();
       return view('user.pages.home',compact('user'));
    }
    
   
    
}
