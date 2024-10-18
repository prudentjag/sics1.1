<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            $token = JWTAuth::fromUser($user);

            return redirect()->intended('dashboard')
                             ->with('success', 'Logged in successfully')
                             ->with('token', $token);  
        }

        return back()->withErrors(['error' => 'Invalid credentials']);
    }

    // Get the authenticated user
    public function me()
    {
        return response()->json(auth()->user());
    }

    // Token response structure
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

    // Logout method
    public function logout()
    {
        auth()->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }
}
