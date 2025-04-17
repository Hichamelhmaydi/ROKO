@extends('layouts/app')
@section('title','les images')
@section('content')
<body class="min-h-screen bg-white">
    <main>
        <!-- Image principale -->
        <div class="relative w-full  md-full">
            <img 
                src="{{ asset('images/sonia.jpg') }}" 
                alt="Dôme architectural à Copenhague" 
                class="w-full h-full object-cover"
            >
        </div>

        <!-- Onglets de navigation -->
        <div class="flex border-b">
            <a href="#apercu" class="px-6 py-4 text-gray-700 hover:bg-gray-100">Aperçu de l'itinéraire</a>
            <a href="#images" class="px-6 py-4 bg-[#a42a2a] text-white font-medium">Des images</a>
            <a href="#prix" class="px-6 py-4 text-gray-700 hover:bg-gray-100">Le prix total</a>
            <a href="#avis" class="px-6 py-4 text-gray-700 hover:bg-gray-100">Avis et notes</a>
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

 <!-- Titre -->
 <div class="text-center mb-12">
    <h1 class="text-3xl md:text-4xl font-medium">Danemark - Copenhague</h1>
</div>

<!-- Drapeau du Danemark -->
<div class="flex justify-center mb-16">
    <img src="images/danmarek.jpg" alt="danmarek.jpg" class=" w-[787.56px] h-[443px] object-cover object-center ">
</div>

<!-- Galerie d'images -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-16">
    <!-- Image 1 -->
    <div class="aspect-square overflow-hidden">
        <img 
            src="{{ asset('images/destination1.jpg') }}" 
            alt="Église de Marbre à Copenhague" 
            class="w-full h-full object-cover"
        >
    </div>
    
    <!-- Image 2 -->
    <div class="aspect-square overflow-hidden">
        <img 
            src="{{ asset('images/destination2.jpg') }}" 
            alt="Vue intérieure de la Tour Ronde à Copenhague" 
            class="w-full h-full object-cover"
        >
    </div>
    
    <!-- Image 3 -->
    <div class="aspect-square overflow-hidden">
        <img 
            src="{{ asset('images/destination3.jpg') }}" 
            alt="Vue aérienne d'une place à Copenhague" 
            class="w-full h-full object-cover"
        >
    </div>
</div>
    </main>
</body>
@endsection