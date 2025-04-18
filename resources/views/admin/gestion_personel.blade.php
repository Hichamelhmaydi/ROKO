@extends('layouts/app')
@section('title','avis')
@section('content')
<main>
    <div class="container mx-auto px-4 py-8">
        <!-- Cercle rouge avec titre -->
        <div class="relative mb-8">
            <div class="absolute -z-10 w-96 h-96 rounded-full bg-[#A42A2A] left-0 top-0"></div>
            <h1 class="text-black text-4xl font-light text-center pt-32">les personnel</h1>
        </div>

        <!-- Tableau du personnel -->
        <div class="bg-secondary rounded-lg overflow-hidden shadow-lg max-w-4xl mx-auto">
            <table class="w-full">
                <thead>
                    <tr class="text-left">
                        <th class="px-6 py-4">ID</th>
                        <th class="px-6 py-4">Profile</th>
                        <th class="px-6 py-4">Nom</th>
                        <th class="px-6 py-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">
                            <img src="/placeholder.svg?height=50&width=50" alt="Akane Akari" class="w-12 h-12 rounded-full object-cover">
                        </td>
                        <td class="px-6 py-4">Akane Akari</td>
                        <td class="px-6 py-4 text-right space-x-4">
                            <button type="submit"><img src="images/pause.png" alt="supprimer" width="30px" height="30px"></button>
                            <button type="submit"><img src="images/search-file.png" alt="supprimer" width="30px" height="30px"></button>    
                            <button type="submit"><img src="images/up.png" alt="up" width="30px" height="30px"></button>    
                            <button type="submit"><img src="images/block-user.png" alt="bloque" width="30px" height="30px"></button>    
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4">
                            <img src="/placeholder.svg?height=50&width=50" alt="Aoi Fumiko" class="w-12 h-12 rounded-full object-cover">
                        </td>
                        <td class="px-6 py-4">Aoi Fumiko</td>
                        <td class="px-6 py-4 text-right space-x-4">
                            <button type="submit"><img src="images/pause.png" alt="supprimer" width="30px" height="30px"></button>
                            <button type="submit"><img src="images/search-file.png" alt="supprimer" width="30px" height="30px"></button>    
                            <button type="submit"><img src="images/up.png" alt="up" width="30px" height="30px"></button>    
                            <button type="submit"><img src="images/block-user.png" alt="bloque" width="30px" height="30px"></button>    
                        </td>
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
            
            <!-- Bouton Ajouter -->
            <div class="px-6 py-4 flex justify-center">
                <button class="flex items-center text-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Ajouter un nouvel employé
                </button>
            </div>
        </div>
        
        <!-- Cercle rouge en bas à droite -->
        <div class="relative mt-16">
            <div class="absolute -z-10 w-96 h-96 rounded-full bg-[#A42A2A] right-0 bottom-0"></div>
        </div>
    </div>
</main>
@endsection