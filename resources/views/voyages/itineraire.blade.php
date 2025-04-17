@extends('layouts/app')
@section('title','itineraire')
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
            <a href="#apercu" class="px-6 py-4 bg-[#a42a2a] text-white font-medium">Aperçu de l'itinéraire</a>
            <a href="#images" class="px-6 py-4 text-gray-700 hover:bg-gray-100">Des images</a>
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

        <!-- Titre et contenu principal -->
        <div class="px-4 py-8">
            <h1 class="text-3xl font-medium text-center mb-8">Danemark - Copenhague</h1>
            
            <div class="mb-8">
                <p class="font-medium">(Disponible de mars à octobre - Prix pour deux personnes)</p>
                <p class="my-4">
                    Voyager au Danemark est une expérience idéale pour les amateurs de nature, de culture et d'histoire. Classé 
                    parmi les pays les plus heureux du monde, le Danemark séduit par son charme unique, son architecture moderne 
                    et son riche patrimoine. Cette destination offre un mélange parfait entre tradition et innovation, ce qui en fait un 
                    lieu incontournable pour les voyageurs en quête de découvertes et d'aventures.
                </p>
                <p class="my-4">
                    Les touristes visitent le Danemark non seulement pour ses magnifiques paysages et ses plages idylliques, mais 
                    aussi pour découvrir le mode de vie scandinave, se promener à vélo dans ses rues pittoresques, savourer des 
                    fruits de mer frais, et explorer des châteaux royaux ainsi que des musées contemporains.
                </p>
                <p class="my-4">
                    L'une des villes les plus prisées et sans aucun doute Copenhague, la capitale, où l'histoire rencontre la 
                    modernité. Entre les palais royaux, les charmants canaux et les célèbres jardins de Tivoli, Copenhague offre une 
                    expérience unique, agrémentée de cafés cosy et de restaurants renommés.
                </p>
            </div>
            
            <!-- Ce que l'offre comprend -->
            <div class="mb-8">
                <h2 class="text-xl font-medium mb-4">Ce que l'offre comprend :</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Hébergement dans un hôtel 4 étoiles.</li>
                    <li>Transferts en voiture privée ou en bus climatisé avec un guide touristique.</li>
                    <li>Transfert aller-retour entre l'aéroport et l'hôtel.</li>
                    <li>Activités quotidiennes et billets d'entrée aux musées et sites touristiques.</li>
                    <li>Accompagnement par un guide local tout au long des visites et excursions.</li>
                    <li>Petit-déjeuner quotidien, déjeuner, et dîner de bienvenue.</li>
                </ul>
            </div>
            
            <!-- Ce qui n'est pas inclus -->
            <div class="mb-8">
                <h2 class="text-xl font-medium mb-4">Ce qui n'est pas inclus (n'hésitez pas à nous contacter si vous avez besoin d'aide) :</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li>Billets d'avion internationaux.</li>
                    <li>Visa.</li>
                    <li>Assurance voyage.</li>
                    <li>Repas en dehors de ceux mentionnés ci-dessus.</li>
                </ul>
            </div>
            
            <p class="font-medium text-lg">
                Préparez-vous à découvrir le charme du Danemark et à vivre une expérience inoubliable au cœur de Copenhague !
            </p>
        </div>
                <!-- Image principale -->
<div class="w-full h-[400px] md:h-[500px] overflow-hidden">
    <img 
        src="{{ asset('images/adrian.jpg') }}" 
        alt="Nyhavn à Copenhague avec ses bâtiments colorés et bateaux" 
        class="w-full h-full object-cover"
    >
</div>

<!-- Titre de la section -->
<div class="py-10 text-center">
    <h1 class="text-3xl font-medium">Trajectoire de vol</h1>
</div>

<!-- Itinéraire par jour -->
<div class="space-y-8 mb-16">

    <!-- Jour 1 -->
    <div class="border-t border-gray-200">
        <div class="bg-[#a42a2a] text-white p-4 flex items-center justify-between cursor-pointer toggle-day" data-target="day1-content">
            <div class="flex items-center">
                <span class="bg-[#e5c9a5] text-black px-6 py-2 rounded-full mr-4 font-medium">Premier jour</span>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span class="text-lg">Arrivée au Danemark</span>
                </div>
            </div>
        </div>
        <div id="day1-content" class="day-content p-6 bg-gray-50 hidden transition-all duration-300 ease-in-out">
            <div class="max-w-3xl mx-auto">
                <h3 class="text-xl font-medium mb-4">Bienvenue à Copenhague</h3>
                <p class="mb-4">
                    Arrivée à l'aéroport international de Copenhague où notre guide vous accueillera. Transfert à votre hôtel 4 étoiles situé au cœur de la ville.
                </p>
                <p class="mb-4">
                    Après vous être installé, profitez d'une promenade d'orientation dans le quartier pour vous familiariser avec les environs.
                </p>
                <p class="mb-4">
                    En soirée, rejoignez le groupe pour un dîner de bienvenue dans un restaurant local où vous pourrez déguster des spécialités danoises traditionnelles.
                </p>
                <div class="mt-6">
                    <h4 class="font-medium mb-2">Inclus aujourd'hui :</h4>
                    <ul class="list-disc pl-6 space-y-2">
                        <li class="flex items-center justify-between">
                            Petit-déjeuner et déjeuner
                            <div class="space-x-2">
                                <button class="px-2 py-1  text-white text-sm rounded"><img src="images/verifier.png" alt="verifier.png " class="w-6 h-6"></button>
                                <button class="px-2 py-1 text-white text-sm rounded"><img src="images/X.png" alt="X.png " class="w-6 h-6"></button>
                            </div>
                        </li>
                        <li class="flex items-center justify-between">
                            Visite guidée de la ville
                            <div class="space-x-2">
                                <button class="px-2 py-1  text-white text-sm rounded"><img src="images/verifier.png" alt="verifier.png " class="w-6 h-6"></button>
                                <button class="px-2 py-1 text-white text-sm rounded"><img src="images/X.png" alt="X.png " class="w-6 h-6"></button>
                            </div>
                        </li>
                        <li class="flex items-center justify-between">
                            Croisière sur les canaux
                            <div class="space-x-2">
                                <button class="px-2 py-1  text-white text-sm rounded"><img src="images/verifier.png" alt="verifier.png " class="w-6 h-6"></button>
                                <button class="px-2 py-1 text-white text-sm rounded"><img src="images/X.png" alt="X.png " class="w-6 h-6"></button>
                            </div>
                        </li>
                        <li class="flex items-center justify-between">
                            Entrées aux sites mentionnés
                            <div class="space-x-2">
                                <button class="px-2 py-1  text-white text-sm rounded"><img src="images/verifier.png" alt="verifier.png " class="w-6 h-6"></button>
                                <button class="px-2 py-1 text-white text-sm rounded"><img src="images/X.png" alt="X.png " class="w-6 h-6"></button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
    
        
    </div>

    <!-- Jour 2 -->
    <div class="border-t border-gray-200">
        <div class="bg-[#a42a2a] text-white p-4 flex items-center justify-between cursor-pointer toggle-day" data-target="day2-content">
            <div class="flex items-center">
                <span class="bg-[#e5c9a5] text-black px-6 py-2 rounded-full mr-4 font-medium">deuxième jour</span>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span class="text-lg">Explorez le Copenhague classique</span>
                </div>
            </div>
        </div>
        <div id="day2-content" class="day-content p-6 bg-gray-50 hidden transition-all duration-300 ease-in-out">
            <div class="max-w-3xl mx-auto">
                <h3 class="text-xl font-medium mb-4">Découverte des incontournables</h3>
                <p class="mb-4">
                    Après le petit-déjeuner, partez pour une visite guidée des sites emblématiques de Copenhague : palais d'Amalienborg, statue de la Petite Sirène, fontaine de Gefion, etc.
                </p>
                <p class="mb-4">
                    Après le déjeuner, explorez Nyhavn et profitez d'une croisière sur les canaux.
                </p>
                <div class="mt-6">
                    <h4 class="font-medium mb-2">Inclus aujourd'hui :</h4>
                    <ul class="list-disc pl-6 space-y-2">
                        <li class="flex items-center justify-between">
                            Petit-déjeuner et déjeuner
                            <div class="space-x-2">
                                <button class="px-2 py-1  text-white text-sm rounded"><img src="images/verifier.png" alt="verifier.png " class="w-6 h-6"></button>
                                <button class="px-2 py-1 text-white text-sm rounded"><img src="images/X.png" alt="X.png " class="w-6 h-6"></button>
                            </div>
                        </li>
                        <li class="flex items-center justify-between">
                            Visite guidée de la ville
                            <div class="space-x-2">
                                <button class="px-2 py-1  text-white text-sm rounded"><img src="images/verifier.png" alt="verifier.png " class="w-6 h-6"></button>
                                <button class="px-2 py-1 text-white text-sm rounded"><img src="images/X.png" alt="X.png " class="w-6 h-6"></button>
                            </div>
                        </li>
                        <li class="flex items-center justify-between">
                            Croisière sur les canaux
                            <div class="space-x-2">
                                <button class="px-2 py-1  text-white text-sm rounded"><img src="images/verifier.png" alt="verifier.png " class="w-6 h-6"></button>
                                <button class="px-2 py-1 text-white text-sm rounded"><img src="images/X.png" alt="X.png " class="w-6 h-6"></button>
                            </div>
                        </li>
                        <li class="flex items-center justify-between">
                            Entrées aux sites mentionnés
                            <div class="space-x-2">
                                <button class="px-2 py-1  text-white text-sm rounded"><img src="images/verifier.png" alt="verifier.png " class="w-6 h-6"></button>
                                <button class="px-2 py-1 text-white text-sm rounded"><img src="images/X.png" alt="X.png " class="w-6 h-6"></button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Jour 3 -->
    <div class="border-t border-gray-200">
        <div class="bg-[#a42a2a] text-white p-4 flex items-center justify-between cursor-pointer toggle-day" data-target="day3-content">
            <div class="flex items-center">
                <span class="bg-[#e5c9a5] text-black px-6 py-2 rounded-full mr-4 font-medium">troisième jour</span>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span class="text-lg">Jardins de Tivoli et culture danoise</span>
                </div>
            </div>
        </div>
        <div id="day3-content" class="day-content p-6 bg-gray-50 hidden transition-all duration-300 ease-in-out">
            <div class="max-w-3xl mx-auto">
                <h3 class="text-xl font-medium mb-4">Magie et culture</h3>
                <p class="mb-4">
                    Journée aux célèbres jardins de Tivoli. Dans l'après-midi, visite du Musée National du Danemark.
                </p>
                <div class="mt-6">
                    <h4 class="font-medium mb-2">Inclus aujourd'hui :</h4>
                    <ul class="list-disc pl-6 space-y-2">
                        <li class="flex items-center justify-between">
                            Petit-déjeuner
                            <div class="space-x-2">
                                <button class="px-2 py-1  text-white text-sm rounded"><img src="images/verifier.png" alt="verifier.png " class="w-6 h-6"></button>
                                <button class="px-2 py-1 text-white text-sm rounded"><img src="images/X.png" alt="X.png " class="w-6 h-6"></button>
                            </div>
                        </li>
                        <li class="flex items-center justify-between">
                            Entrée aux jardins de Tivoli
                            <div class="space-x-2">
                                <button class="px-2 py-1  text-white text-sm rounded"><img src="images/verifier.png" alt="verifier.png " class="w-6 h-6"></button>
                                <button class="px-2 py-1 text-white text-sm rounded"><img src="images/X.png" alt="X.png " class="w-6 h-6"></button>
                            </div>
                        </li>
                        <li class="flex items-center justify-between">
                            Visite guidée du Musée National
                            <div class="space-x-2">
                                <button class="px-2 py-1  text-white text-sm rounded"><img src="images/verifier.png" alt="verifier.png " class="w-6 h-6"></button>
                                <button class="px-2 py-1 text-white text-sm rounded"><img src="images/X.png" alt="X.png " class="w-6 h-6"></button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    

<!-- Script toggle -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleButtons = document.querySelectorAll('.toggle-day');

        toggleButtons.forEach(button => {
            button.addEventListener('click', function () {
                const targetId = this.getAttribute('data-target');
                const targetContent = document.getElementById(targetId);
                targetContent.classList.toggle('hidden');
            });
        });
    });
</script>

    </main>
</body>
@endsection