<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            return route('login');
        }

        // add UserStatus logic here if any

        // if (Auth::attempt(['Email' => $request->username, 'Password' => $request->password], $request->remember)) {

        //     $user = Auth::user();
        //     $success['token'] =  $request->user()->createToken('MyApp')->accessToken;

        //     return response()->json(['success' => $success], $this->successStatus);
        // }
        // return response()->json(['error' => 'Unauthorised'], 401);
    }
}
