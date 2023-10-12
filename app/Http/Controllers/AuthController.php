<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;

class AuthController extends Controller
{
    public function register(UserRequest $request)
    {
        $request['password'] = Hash::make($request->password);
        $user = User::create($request->all());
        $token = $user->createToken('intermark')->plainTextToken;
        $answer = [
            'user' => $user,
            'token' => $token
        ];
        return response()->json($answer);
    }

    public function login(Request $request)
    {
        abort_if(!$request->email, '401', 'email is empty');
        abort_if(!$request->password, '401', 'password is empty');
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return response()->json([
                'message' => 'bad credits'
            ]);
        }
        $token = $user->createToken('intermark')->plainTextToken;
        $answer = [
            'user' => $user,
            'token' => $token
        ];
        return response()->json($answer);
    }

    public function logout()
    {
        Auth::user()->tokens()->delete();
        return response()->json([
            'message' => 'user logout'
        ]);
    }

    public function profile()
    {
        echo $var;
        return response()->json(Auth::user());
    }
}
