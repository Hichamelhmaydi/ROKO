<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activite;


class ActiviteController extends Controller
{
    public function AjouterActivite(Request $request){
        try {
            $validatedData = $request->validate([
                'nom' => 'required|string|max:25',
                'description' => 'required|string|max:255|',
            ]);

            $activite = Activite::create([
                'nom' => $validatedData['nom'],
                'description' => $validatedData['description'],
            ]);
    
            if (!$activite) {
                throw new \Exception('Échec de la création activité');
            }
    
            return response()->json([
                'message' => 'activité créé avec succès',
                'activite' => $activite
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Erreur lors de la création du activité',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
