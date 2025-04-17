@extends('layouts/app')
@section('title','paiment')
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
            <a href="#images" class="px-6 py-4 text-gray-700 hover:bg-gray-100">Des images</a>
            <a href="#prix" class="px-6 py-4 bg-[#a42a2a] text-white font-medium">Le prix total</a>
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

<div class="min-h-screen flex flex-col justify-center items-center text-center space-y-12">
    
    <!-- Texte du prix -->
    <div class="space-y-4">
        <h2 class="text-xl font-serif text-black">
            Le prix Total de voyage<br>(pour un personne) :
        </h2>

        <p class="text-7xl font-serif font-light text-black">
            1000$
        </p>
    </div>

    <!-- Méthodes de paiement -->
    <div class="space-y-6">
        <p class="text-xl font-serif text-black">
            Réservez et payez via :
        </p>

        <div class="flex justify-center items-center space-x-[500px]">
            <div class="w-20">
                <img src="{{ asset('images/visa.png') }}" alt="Visa" class="w-full h-auto cursor-pointer">
            </div>
            <div class="w-16">
                <img src="{{ asset('images/logo.png') }}" alt="MasterCard" class="w-full h-auto cursor-pointer">
            </div>
            <div class="w-16">
                <img src="{{ asset('images/paypal.png') }}" alt="PayPal" class="w-full h-auto cursor-pointer">
            </div>
        </div>
    </div>
</div>



    </main>
</body>
@endsection