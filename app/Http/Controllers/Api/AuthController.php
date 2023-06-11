<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AuthResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Auth;
use Validator;

class AuthController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function register(Request $request): Response
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8'
        ]);

        if ($validator->fails()) {
            return Response($validator->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return Response(new AuthResource(['data' => $user, 'access_token' => $token, 'token_type' => 'Bearer',]));
    }

    public function login(Request $request): Response
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()
                ->json(['message' => 'Unauthorized'], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return Response(
            ['message' => 'Hi ' . $user->name . ', welcome to home', 'access_token' => $token, 'token_type' => 'Bearer',]
        );
    }

    public function logout(): Response
    {
        Auth::user()->tokens()->delete();

        return Response([
            'message' => 'You have successfully logged out and the token was successfully deleted'
        ]);
    }
}
