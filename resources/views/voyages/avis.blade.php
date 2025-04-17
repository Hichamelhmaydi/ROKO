@extends('layouts/app')
@section('title','avis')
@section('content')
<body class="min-h-screen bg-white">
    <div class="relative w-full  md-full">
        <img 
            src="{{ asset('images/sonia.jpg') }}" 
            alt="Dôme architectural à Copenhague" 
            class="w-full h-full object-cover"
        >
    </div>
    <div class="flex border-b">
        <a href="#apercu" class="px-6 py-4 text-gray-700 hover:bg-gray-100">Aperçu de l'itinéraire</a>
        <a href="#images" class="px-6 py-4 text-gray-700 hover:bg-gray-100">Des images</a>
        <a href="#prix" class="px-6 py-4 text-gray-700 hover:bg-gray-100">Le prix total</a>
        <a href="#avis" class="px-6 py-4 bg-[#a42a2a] text-white font-medium">Avis et notes</a>
    </div>

    <!-- Informations clés avec icônes -->
    <div class="grid grid-cols-1 md:grid-cols-5 gap-4 py-8 px-4 border-b">
        <div class="flex flex-col items-center text-center">
           <img src="images/calendrier.png" alt="calendrier" class="w-12 h-12">
            <h3 class="font-medium">Date du voyage :</h3>
            <p>15/02/2025</p>
        </div>
        
        <div class="flex flex-col items-center text-center">
            <img src="images/lit-double.png" alt="lit" class="w-12 h-12">
            <h3 class="font-medium">5 nuits</h3>
        </div>
        
        <div class="flex flex-col items-center text-center">
            <img src="images/restaurant.png" alt="restaurant" class="w-12 h-12">
            <h3 class="font-medium">Petit-déjeuner -</h3>
            <p>déjeuner - dîner</p>
            <p>de bienvenue quotidiens</p>
        </div>
        
        <div class="flex flex-col items-center text-center">
            <img src="images/planete-terre.png" alt="planete terre" class="w-12 h-12">
            <h3 class="font-medium">Danemark</h3>
            <p>Copenhague</p>
        </div>
        
        <div class="flex flex-col items-center text-center">
            <img src="images/groupe.png" alt=" groupe" class="w-12 h-12">
            <h3 class="font-medium">maximum:</h3>
            <p>8</p>
        </div>
    </div>





















<!-- Conteneur principal centré -->
<div class="min-h-screen flex items-center justify-center px-4">

    <!-- Bloc principal -->
    <div class="max-w-md w-full space-y-12 text-center">

        <!-- Évaluation de la course -->
        <div class="space-y-6">
            <h2 class="text-2xl font-serif text-black">Évaluation de la course</h2>

            <!-- Étoiles remplies -->
            <div class="flex justify-center space-x-2">
                @for ($i = 0; $i < 5; $i++)
                    <img src="images/star.png" class="w-[30px] h-[30px]">
                @endfor
            </div>

            <!-- Section d'évaluation utilisateur -->
            <div class="space-y-4 mt-8">
                <h3 class="text-xl font-serif text-black">Votre évaluation</h3>

                <!-- Étoiles vides -->
                <div class="flex justify-center space-x-2">
                    @for ($i = 0; $i < 5; $i++)
                        <img src="images/star (1).png" class="w-[30px] h-[30px]">
                    @endfor
                </div>
            </div>
        </div>

        <!-- Section Avis -->
        <div class="space-y-4">
            <h3 class="text-xl font-serif text-black">Avis</h3>

            <!-- Carte d'avis -->
            <div class="bg-[#e5c9a5] rounded-3xl p-6 space-y-6 text-left">
                <!-- Info utilisateur et avis -->
                <div class="flex space-x-4">
                    <img src="{{ asset('images/maria.jpg') }}" alt="Maria Garcia" class="w-16 h-16 rounded-full object-cover">
                    <div>
                        <h4 class="font-medium text-black">Maria Garcia</h4>
                        <p class="text-black mt-2">
                            It is a long established fact that a reader will be distracted by the readable content...
                        </p>
                    </div>
                </div>

                <!-- Section Réponse -->
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/sophie.jpg') }}" alt="User" class="w-12 h-12 rounded-full object-cover">
                    <div class="flex-1">
                        <button class="bg-[#e3dfda] text-black rounded-full py-2 px-6 w-full flex justify-between items-center">
                            <span>Réponse</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Bouton Ajouter avis -->
            <div class="bg-[#e5c9a5] rounded-3xl p-6">
                <button class="bg-[#e3dfda] text-black rounded-full py-3 px-6 w-full flex justify-between items-center">
                    <span>Ajouter votre avis</span>
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>

    </div>
</div>
    
    <script>
        // Simple star rating functionality
        document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('.far.fa-star');
            
            stars.forEach((star, index) => {
                star.addEventListener('click', () => {
                    // Reset all stars
                    stars.forEach(s => {
                        s.classList.remove('fas', 'text-yellow-400');
                        s.classList.add('far', 'text-black');
                    });
                    
                    // Fill stars up to the clicked one
                    for (let i = 0; i <= index; i++) {
                        stars[i].classList.remove('far', 'text-black');
                        stars[i].classList.add('fas', 'text-yellow-400');
                    }
                });
            });
        });
    </script>
    @endsection