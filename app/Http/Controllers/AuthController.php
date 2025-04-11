<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Personel;
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
            $user = User::where('email', $credentials['email'])->first();
            if ($user && Hash::check($credentials['password'], $user->password)) {
                $token = Auth::guard('api')->login($user);
                return $this->respondWithToken($token, 'user');
            }
            $admin = Admin::where('email', $credentials['email'])->first();
            if ($admin && $admin->password) {
                $token = Auth::guard('admin')->login($admin);
                return $this->respondWithToken($token, 'admin');
            }
            $personel = Personel::where('email', $credentials['email'])->first();
            if ($personel && Hash::check($credentials['password'], $personel->password)) {
                $token = Auth::guard('personel')->login($personel);
                return $this->respondWithToken($token, 'personel');
            }
            return response()->json([
                'error' => 'Identifiants incorrects'
            ], 401);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Erreur de connexion',
                'message' => $e->getMessage()
            ], 500);
        }
    }
    protected function respondWithToken($token, $userType = null){
        $response = [
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => Auth::guard('api')->factory()->getTTL() * 60
        ];
        
        if ($userType) {
            $response['user_type'] = $userType;
        }
        
        return response()->json($response);
    }
    public function me(){
        $user = null;
        $userType = null;
        
        if (Auth::guard('api')->check()) {
            $user = Auth::guard('api')->user();
            $userType = 'user';
        } elseif (Auth::guard('admin')->check()) {
            $user = Auth::guard('admin')->user();
            $userType = 'admin';
        } elseif (Auth::guard('personel')->check()) {
            $user = Auth::guard('personel')->user();
            $userType = 'personel';
        }
        
        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        
        return response()->json([
            'user' => $user,
            'user_type' => $userType,
            'role' => $user->role
        ]);
    }
    public function logout(){
        try {
            if (Auth::guard('api')->check()) {
                Auth::guard('api')->logout();
            } elseif (Auth::guard('admin')->check()) {
                Auth::guard('admin')->logout();
            } elseif (Auth::guard('personel')->check()) {
                Auth::guard('personel')->logout();
            }
            
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
}