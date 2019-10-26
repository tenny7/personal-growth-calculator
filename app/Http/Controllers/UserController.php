<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    { 
        
        $users = User::all();
        if($request->ajax())
        {
            return new UserCollection($users);
        }
        return view('user.index', compact($users));
    }

    /**
     * Login
     */
    public function login(Request $request)
    {
        
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) 
        {
            $token = Auth::user()->api_token;
            return Response::json([
                'success' => 'Logged in',
                'api_token' => $token
            ]);
        }
            return Response::json(['error' => 'Login failed'],401);
    }
}
