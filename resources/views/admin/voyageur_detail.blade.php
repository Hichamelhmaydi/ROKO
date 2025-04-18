@extends('layouts/app')
@section('title','avis')
@section('content')
<main>
    <div class="container mx-auto px-4 py-8">
        <!-- Section Profil -->
        <div class="flex flex-col md:flex-row items-start gap-6 mb-12">
            <div class="w-32 h-32 rounded-full overflow-hidden bg-purple-300 flex-shrink-0">
                <img src="/placeholder.svg?height=128&width=128" alt="Aoi Fumiko" class="w-full h-full object-cover">
            </div>
            
            <div class="flex-grow ">
                <div class="mb-2">
                    <span class="font-medium">Nom complète : </span>
                    <span class="text-[#A42A2A]">Aoi Fumiko</span>
                </div>
                
                <div class="mb-2">
                    <span class="font-medium">Email : </span>
                    <span class="text-[#A42A2A]">AoiFumiko@gmail.com</span>
                </div>
                
                <div class="mb-2">
                    <span class="font-medium">Numéro de téléphone : </span>
                    <span class="text-[#A42A2A]">+81 32 42 132 432</span>
                </div>
                
                <div class="mb-2">
                    <span class="font-medium">Numéro de passeport : </span>
                    <span class="text-[#A42A2A]">TH1234567</span>
                </div>
                
                <div class="mb-4">
                    <span class="font-medium">L'adresse : </span>
                    <span class="text-[#A42A2A]">Tokyo</span>
                </div>
                
                <div class="flex space-x-4">
                    <button class="inline-block">
                      <img src="images/block-user.png" alt="bloque" class="w-10 h-10">
                    </button>
                    <button class="inline-block">
                        <img src="images/pause.png" alt="suspende" class="w-10 h-10">
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Section Réservations -->
        <h2 class="text-primary text-2xl font-medium text-center mb-6">Réservations</h2>
        <div class="bg-secondary rounded-lg overflow-hidden shadow-lg max-w-4xl mx-auto mb-12">
            <table class="w-full">
                <thead>
                    <tr class="text-left">
                        <th class="px-6 py-4">ID</th>
                        <th class="px-6 py-4">Date</th>
                        <th class="px-6 py-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">10-05-2026</td>
                        <td class="px-6 py-4 text-right space-x-4">
                            <button class="inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </button>
                            <button class="inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
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
        </div>
        
        <!-- Section Commentaires -->
        <h2 class="text-primary text-2xl font-medium text-center mb-6">Commentaires</h2>
        <div class="bg-secondary rounded-lg overflow-hidden shadow-lg max-w-4xl mx-auto">
            <table class="w-full">
                <thead>
                    <tr class="text-left">
                        <th class="px-6 py-4">ID</th>
                        <th class="px-6 py-4">ID-voyage</th>
                        <th class="px-6 py-4">contenu</th>
                        <th class="px-6 py-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">of type and scrambled it to make a type specimen book</td>
                        <td class="px-6 py-4 text-right">
                            <button>
                            <img src="images/supprimer.png" alt="supprimer" class="w-10 h-10">
                        </button>
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
        </div>
        
        <!-- Cercles rouges décoratifs -->
        <div class="relative mt-16">
            <div class="absolute -z-10 w-64 h-64 rounded-full bg-[#A42A2A] right-[200px] -top-[290px]"></div>
            <div class="absolute -z-10 w-64 h-64 rounded-full bg-[#A42A2A] right-[200px] -top-[580px]"></div>
        </div>
    </div>
</main>
@endsection