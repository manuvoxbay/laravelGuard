<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
    	if(auth()->guard('web')->attempt($request->only('email','password')))
		{
		    return auth()->guard('web')->user();
		}
		return "login failed";
    }
}
