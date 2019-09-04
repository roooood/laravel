<?php

    namespace App\Http\Middleware;
    use Cookie;
    use Closure;
    use JWTAuth;
    use Exception;
    use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

    class JwtMiddleware extends BaseMiddleware
    {

        /**
         * Handle an incoming request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Closure  $next
         * @return mixed
         */
        public function handle($request, Closure $next)
        {
            try {
                $token = $request->has('token') ? $request->get('token') : Cookie::get('token');
                $parse = JWTAuth::parseToken($token);//->toUser() - authenticate
                $payload = $parse->getPayload();
                $request->merge(['user'=>$payload['user']]);
            } catch (Exception $e) {
                if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                    return response()->json(['success' => 'Token is Invalid']);
                }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                    return response()->json(['success' => 'Token is Expired']);
                }else{
                    return response()->json(['success' => 'Authorization Token not found']);
                }
            }
            return $next($request);
        }
    }