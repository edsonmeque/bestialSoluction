<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        return $request->user();
    }

        public function register(Request $request)
        {
            $fields = $request->validate([
                'name' => 'required|string',
                'email' => 'required|string',
                'password' => 'required|string|confirmed',

            ]);

            $user = User::create([
                'name' => $fields['name'],
                'email' => $fields['email'],
                'password' => bcrypt($fields['password']),

            ]);

            if ($user) {
                $token = $user->createToken('myapptoken')->plainTextToken;

                return response()->json(['message' => 'usuario criado com sucesso', 'token ' => $token], 201);
            } else {
                return response()->json(['message' => 'erro ao criar usuario!']);
            }
        }

        public function login(Request $request)
        {
            $fields = $request->validate([
                'email' => 'required|string',
                'password' => 'required|string',
            ]);
            //check email
            $user = User::where('email', $fields['email'])->first();
            //chack password
            if (! $user || ! Hash::check($fields['password'], $user->password)) {
                return response()->json([
                    'massage' => 'Bad creds',
                ], 401);
            }

            $token = $user->createToken('LoginToken')->plainTextToken;

            return response()->json([
                'user' => $user,
                'token' => $token,
            ], 200);
        }

        public function logout()
        {
            auth()->user()->tokens()->delete();

            return response()->json([
                'massage' => 'Token of client removed with successfully',
            ]);
        }
}
