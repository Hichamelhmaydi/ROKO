@extends('layouts/app')
@section('title','avis')
@section('content')
<main>
    <div class="container mx-auto px-4 py-8">
        <!-- Titre -->
        <h1 class="text-black text-4xl font-light text-center mb-8">Les voyages</h1>

        <!-- Tableau des voyages -->
        <div class="bg-secondary rounded-lg overflow-hidden shadow-lg max-w-5xl mx-auto mb-12">
            <table class="w-full">
                <thead>
                    <tr class="text-left">
                        <th class="px-6 py-4 w-1/5">ID</th>
                        <th class="px-6 py-4 w-1/5">Nom</th>
                        <th class="px-6 py-4 w-2/5">description</th>
                        <th class="px-6 py-4 w-2/5">Activités</th>
                        <th class="px-6 py-4 w-1/5">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-6 py-4 align-top font-medium">1</td>
                        <td class="px-6 py-4 align-top font-medium">Aventure Saharienne</td>
                        <td class="px-6 py-4 align-top">
                            Un voyage magique à travers les dunes dorées du Sahara marocain avec des nuits sous les étoiles.
                        </td>
                        <td class="px-6 py-4 align-top">
                            <ul class="list-disc pl-5 space-y-1">
                                <li>Randonnée à dos de chameau</li>
                                <li>Nuit dans un camp bédouin traditionnel</li>
                                <li>Observation des étoiles avec un astronome local</li>
                                <li>Cours de cuisine traditionnelle berbère</li>
                                <li>Visite des oasis cachées</li>
                            </ul>
                        </td>
                        <td class="px-6 py-4 align-top font-medium" ><button><img src="images/supprimer.png" alt="supprimer une voyage" class="w-10 h-10"></button></td>
                    </tr>
                </tbody>
            </table>
            
            <!-- Pagination -->
            <div class="px-6 py-4 flex justify-center space-x-2">
                <button class="bg-text-dark text-white w-8 h-8 rounded-md flex items-center justify-center">1</button>
                <button class="text-text-dark w-8 h-8 rounded-md flex items-center justify-center">2</button>
                <button class="text-text-dark w-8 h-8 rounded-md flex items-center justify-center">3</button>
                <span class="text-text-dark flex items-center">...</span>
                <button class="text-text-dark w-8 h-8 rounded-md flex items-center justify-center">67</button>
                <button class="text-text-dark w-8 h-8 rounded-md flex items-center justify-center">68</button>
            </div>
        </div>
        
        <!-- Section des statistiques -->
        <div class="max-w-2xl mx-auto mb-12 space-y-8">
            <!-- Voyages annulées -->
            <div class="flex items-center justify-between mb-2">
                <h3 class="text-lg font-medium">Les voyages annulées</h3>
                <span class="text-lg">10/20</span>
            </div>
            
            <!-- Voyages complète -->
            <div class="flex items-center justify-between mb-2">
                <h3 class="text-lg font-medium">Les voyages complète</h3>
                <span class="text-lg">10/20</span>
            </div>

        </div>
        
        <!-- Bouton Ajouter -->
        <div class="flex justify-center mb-16">
            <button class="bg-[#A42A2A] text-white rounded-full px-6 py-3 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Ajouter un voyage
            </button>
        </div>
        
        <!-- Cercle rouge décoratif -->
        <div class="relative">
            <div class="absolute -z-10 w-96 h-96 rounded-full bg-[#A42A2A] right-0 -top-[740px]"></div>
        </div>
    </div>
</main>
@endsection