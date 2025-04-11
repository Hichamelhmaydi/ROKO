<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personel;

class PersonelController extends Controller
{
    public function AjouterPersonel(Request $request){
        try {
            $validatedData = $request->validate([
                'nom' => 'required|string|max:25',
                'prenom' => 'required|string|max:25|unique:personels',
                'email' => 'required|email|unique:personels',
                'telephone' => 'required|string|max:11',
                'adrees' => 'required|string|min:8',
                'N°_cart' => 'required|string|max:20',
                'N°_passport' => 'required|string|max:20',
                'image_chemain' => 'nullable|string',
            ]);

            $personel = Personel::create([
                'nom' => $validatedData['nom'],
                'prenom' => $validatedData['prenom'],
                'email' => $validatedData['email'],
                'telephone' => $validatedData['telephone'],
                'adrees' => $validatedData['adrees'],
                'N°_cart' => $validatedData['N°_cart'],
                'N°_passport' => $validatedData['N°_passport'],
                'image_chemain' => $validatedData['image_chemain'] ?? null,
            ]);
    
            if (!$personel) {
                throw new \Exception('Échec de la création du personnel');
            }
    
            return response()->json([
                'message' => 'Personnel créé avec succès',
                'personel' => $personel
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Erreur lors de la création du personnel',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
