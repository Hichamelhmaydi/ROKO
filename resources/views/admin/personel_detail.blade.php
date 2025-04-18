@extends('layouts/app')
@section('title','avis')
@section('content')
<main>
    <div class="container mx-auto px-4 py-8 relative">
        <!-- Cercles rouges décoratifs -->
        <div class="absolute -z-10 w-64 h-64 rounded-full bg-[#A42A2A] right-0 top-32"></div>
        <div class="absolute -z-10 w-96 h-96 rounded-full bg-[#A42A2A] left-0 -bottom-[200px]"></div>
        
        <!-- Section Profil -->
        <div class="max-w-4xl mx-auto">
            <div class="flex flex-col md:flex-row items-start gap-8 mb-16">
                <div class="w-48 h-48 rounded-full overflow-hidden bg-purple-300 flex-shrink-0">
                    <img src="/placeholder.svg?height=192&width=192" alt="Aoi Fumiko" class="w-full h-full object-cover">
                </div>
                
                <div class="flex-grow space-y-6">
                    <div>
                        <span class="text-xl font-medium">Nom complète : </span>
                        <span class="text-xl text-[#A42A2A]">Aoi Fumiko</span>
                    </div>
                    
                    <div>
                        <span class="text-xl font-medium">Email : </span>
                        <span class="text-xl text-[#A42A2A]">AoiFumiko@gmail.com</span>
                    </div>
                    
                    <div>
                        <span class="text-xl font-medium">Numéro de téléphone : </span>
                        <span class="text-xl text-[#A42A2A]">+81 32 42 132 432</span>
                    </div>
                </div>
            </div>
            
            <div class="space-y-6 mb-16">
                <div>
                    <span class="text-xl font-medium">Cin : </span>
                    <span class="text-xl text-[#A42A2A]">1234-5678-9012</span>
                </div>
                
                <div>
                    <span class="text-xl font-medium">Numéro de passeport : </span>
                    <span class="text-xl text-[#A42A2A]">TH1234567</span>
                </div>
                
                <div>
                    <span class="text-xl font-medium">L'adresse : </span>
                    <span class="text-xl text-[#A42A2A]">Tokyo</span>
                </div>
                
                <div>
                    <span class="text-xl font-medium">Numéro de compte bancaire: </span>
                    <span class="text-xl text-[#A42A2A]">1234567</span>
                </div>
            </div>
            
            <!-- Boutons d'action -->
            <div class="flex justify-center space-x-8">
                <button >
                    <img src="images/up.png" alt="up" class="w-10 h-10">
                </button>
                
                <button>
                    <img src="images/pause.png" alt="suspend" class="w-10 h-10">
                </button>
                
                <button>
                    <img src="images/block-user.png" alt="bloque" class="w-10 h-10">
                </button>
            </div>
        </div>
    </div>
</main>
@endsection