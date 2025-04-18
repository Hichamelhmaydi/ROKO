@extends('layouts/app')
@section('title','voyageurs')
@section('content')
<main>
    <div class="container mx-auto px-4 py-8">
        <!-- Cercle rouge avec titre -->
        <div class="relative mb-8">
            <div class="absolute -z-10 w-96 h-96 rounded-full bg-[#A42A2A] left-[200px] top-[100px]"></div>
            <h1 class="text-white text-4xl font-light pt-32 pl-16"><span class="text-black">tout les voya</span>sgeurs</h1>
        </div>

        <!-- Tableau des voyageurs -->
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
                            <button class="inline-block">
                                <img src="images/block-user.png" alt="bloque" width="30px" height="30px">
                            </button>
                            <button class="inline-block">
                                <img src="images/pause.png" alt="suspende" width="30px" height="30px">
                            </button>
                            <button class="inline-block">
                                <img src="images/search-file.png" alt="details" width="30px" height="30px">
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

        <!-- Statistiques -->
        <div class="mt-16 max-w-4xl mx-auto">
            <h2 class="text-2xl font-medium mb-12 text-center">Statistiques des voyageurs</h2>
            
           
            
            <!-- Légende -->
            <div class="grid grid-cols-3 gap-4 max-w-2xl mx-auto">
                <div class="flex items-center">
                    {{-- <div class="w-4 h-4 rounded-full bg-primary mr-2"></div> --}}
                    <div>
                        <p class="font-medium">Utilisateurs bannis</p>
                        <center><p class="text-lg">40%</p></center>
                    </div>
                </div>
                <div class="flex items-center">
                    {{-- <div class="w-4 h-4 rounded-full bg-secondary mr-2"></div> --}}
                    <div>
                        <p class="font-medium">Utilisateurs suspendus</p>
                        <center><p class="text-lg">40%</p></center>
                    </div>
                </div>
                <div class="flex items-center">
                    {{-- <div class="w-4 h-4 rounded-full bg-dark-blue mr-2"></div> --}}
                    <div>
                        <p class="font-medium">Utilisateurs actifs</p>
                        <center><p class="text-lg">40%</p></center>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection