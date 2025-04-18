@extends('layouts/app')
@section('title','avis')
@section('content')
<main>
    <div class="container mx-auto px-4 py-8 relative">
        <!-- Cercles rouges décoratifs -->
        <div class="absolute -z-10 w-96 h-96 rounded-full bg-[#A42A2A] right-0 top-0"></div>
        <div class="absolute -z-10 w-96 h-96 rounded-full bg-[#A42A2A] left-0 bottom-0"></div>
        
        <!-- Titre -->
        <h1 class="text-black text-4xl font-light text-center mb-12 pt-16">Ajouter Activité</h1>
        
        <!-- Formulaire -->
        <div class="bg-secondary rounded-lg overflow-hidden shadow-lg max-w-2xl mx-auto p-8">
            <form>
                <div class="mb-6">
                    <label for="nom" class="block text-xl mb-2">Nom d'activité :</label>
                    <input type="text" id="nom" class="w-full rounded-full px-4 py-2 border-none focus:ring-0" />
                </div>
                
                <div class="mb-8">
                    <label for="description" class="block text-xl mb-2">Description :</label>
                    <textarea id="description" rows="6" class="w-full rounded-3xl px-4 py-2 border-none focus:ring-0"></textarea>
                </div>
                
                <div class="flex justify-center">
                    <button type="submit" class="bg-[#A42A2A] text-white text-xl font-medium rounded-full px-12 py-3 hover:bg-[#A42A2A]/90 transition-colors">
                        Ajouter
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection