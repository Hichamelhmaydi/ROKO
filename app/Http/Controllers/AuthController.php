<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request){
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'telephone' => 'required|string|max:11',  
             'password' => 'required|string|min:8',  
        ]);

        try {
            $user = User::create([
                'nom' => $validatedData['nom'],
                'prenom' => $validatedData['prenom'],
                'email' => $validatedData['email'],
                'telephone' => $validatedData['telephone'], 
                'password' => Hash::make($validatedData['password']),
            ]);

            return response()->json([
                'message' => 'Utilisateur créé avec succès', 
                'user' => $user
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Erreur lors de la création de l\'utilisateur',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');
    
        try {
            if (!$token = Auth::guard('api')->attempt($credentials)) {
                return response()->json([
                    'error' => 'Identifiants incorrects'
                ], 401);
            }
    
            return $this->respondWithToken($token);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Erreur de connexion',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function me(){
        $user = Auth::guard('api')->user();
        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return response()->json([
            'user' => $user,
            'role' => $user->role
        ]);
    }

    public function logout(){
        try {
            Auth::guard('api')->logout();
            return response()->json([
                'message' => 'Déconnexion réussie'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Erreur lors de la déconnexion',
                'message' => $e->getMessage()
            ], 500);
        }
    }
 
    protected function respondWithToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => Auth::guard('api')->factory()->getTTL() * 60
        ]);
    }
}
