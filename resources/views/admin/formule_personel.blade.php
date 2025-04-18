@extends('layouts/app')
@section('title','avis')
@section('content')
<main>
    <div class="container mx-auto px-4 py-8 relative">
        <!-- Cercles rouges décoratifs -->
        <div class="absolute -z-10 w-96 h-96 rounded-full bg-[#A42A2A] left-0 top-0"></div>
        <div class="absolute -z-10 w-[500px] h-[500px] rounded-full bg-[#A42A2A] right-0 top-64"></div>
        <div class="absolute -z-10 w-[500px] h-[500px] rounded-full bg-[#A42A2A] left-0 bottom-0"></div>
        
        <!-- Titre -->
        <h1 class="text-white text-4xl font-light pt-32 pl-16 mb-12">Ajouter un nouvel e<span class="text-black">mployé</span></h1>
        
        <!-- Formulaire -->
        <div class="bg-secondary rounded-lg overflow-hidden shadow-lg max-w-2xl mx-auto p-8">
            <form>
                <div class="mb-6">
                    <label for="nom" class="block text-xl mb-2">Nom complète :</label>
                    <input type="text" id="nom" class="w-full rounded-full px-4 py-2 border-none focus:ring-0" />
                </div>
                
                <div class="mb-6">
                    <label for="telephone" class="block text-xl mb-2">Numéro de téléphone :</label>
                    <input type="tel" id="telephone" class="w-full rounded-full px-4 py-2 border-none focus:ring-0" />
                </div>
                
                <div class="mb-6">
                    <label for="cin" class="block text-xl mb-2">Cin :</label>
                    <input type="text" id="cin" class="w-full rounded-full px-4 py-2 border-none focus:ring-0" />
                </div>
                
                <div class="mb-6">
                    <label for="passeport" class="block text-xl mb-2">Numéro de passeport :</label>
                    <input type="text" id="passeport" class="w-full rounded-full px-4 py-2 border-none focus:ring-0" />
                </div>
                
                <div class="mb-6">
                    <label for="adresse" class="block text-xl mb-2">L'adresse :</label>
                    <input type="text" id="adresse" class="w-full rounded-full px-4 py-2 border-none focus:ring-0" />
                </div>
                
                <div class="mb-6">
                    <label for="compte" class="block text-xl mb-2">Numéro de compte bancaire:</label>
                    <input type="text" id="compte" class="w-full rounded-full px-4 py-2 border-none focus:ring-0" />
                </div>
                
                <div class="mb-8">
                    <label for="image" class="block text-xl mb-2">Image :</label>
                    <button type="button" class="bg-white rounded-full px-4 py-2 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                        </svg>
                        télécharger des images
                    </button>
                </div>
                
                <div class="flex justify-center">
                    <button type="submit" class="bg-primary text-white text-xl font-medium rounded-full px-12 py-3 hover:bg-primary/90 transition-colors">
                        Ajouter
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection