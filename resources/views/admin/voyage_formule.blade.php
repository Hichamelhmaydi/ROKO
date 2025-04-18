@extends('layouts/app')
@section('title','avis')
@section('content')
<main>
    <div class="container mx-auto px-4 py-8 relative">
        <!-- Cercles rouges décoratifs -->
        <div class="absolute -z-10 w-96 h-96 rounded-full bg-[#A42A2A] right-[300px] top-[100px]"></div>
        <div class="absolute -z-10 w-96 h-96 rounded-full bg-[#A42A2A] left-[300px] bottom-0"></div>
        
        <!-- Titre -->
        <h1 class="text-black text-4xl font-light text-center mb-12">Ajouter une Nouveau voyage</h1>
        
        <!-- Formulaire -->
        <div class="bg-secondary rounded-lg overflow-hidden shadow-lg max-w-2xl mx-auto p-8">
            <form>
                <div class="mb-6">
                    <label for="nom" class="block text-xl mb-2">Nom du vayage :</label>
                    <input type="text" id="nom" class="w-full rounded-full px-4 py-2 border-none focus:ring-0" />
                </div>
                
                <div class="mb-6">
                    <label for="description" class="block text-xl mb-2">Description :</label>
                    <textarea id="description" rows="4" class="w-full rounded-3xl px-4 py-2 border-none focus:ring-0"></textarea>
                </div>
                
                <div class="mb-6">
                    <label for="cover" class="block text-xl mb-2">Cover :</label>
                    <button type="button" id="cover" class="w-full bg-white rounded-full px-4 py-2 text-left flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                        </svg>
                        upload image
                    </button>
                </div>
                
                <div class="mb-6">
                    <label for="prix" class="block text-xl mb-2">Prix :</label>
                    <input type="text" id="prix" class="w-full rounded-full px-4 py-2 border-none focus:ring-0" />
                </div>
                
                <div class="mb-6">
                    <label for="type" class="block text-xl mb-2">Type :</label>
                    <input type="text" id="type" class="w-full rounded-full px-4 py-2 border-none focus:ring-0" />
                </div>
                
                <div class="mb-6">
                    <label for="lieu" class="block text-xl mb-2">Lieu :</label>
                    <input type="text" id="lieu" class="w-full rounded-full px-4 py-2 border-none focus:ring-0" />
                </div>
                
                <div class="mb-8">
                    <label for="personnel" class="block text-xl mb-2">à (Personel) :</label>
                    <input type="text" id="personnel" class="w-full rounded-full px-4 py-2 border-none focus:ring-0" />
                </div>
                
                <div class="flex justify-center">
                    <button type="submit" class="bg-[#A42A2A] text-white text-xl font-medium rounded-full px-12 py-3 hover:bg-primary/90 transition-colors">
                        Ajouter
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection