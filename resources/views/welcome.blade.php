@extends('layouts/app')
@section('title','home')
@section('content')
<body class="bg-background min-h-screen flex flex-col">
<body>
<main>
  <!-- Hero Section -->
  <section class="relative h-[500px] mb-[5px]">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/images/foju.jpg')"></div>
    <div class="absolute inset-0 bg-black bg-opacity-30"></div>
    <div class="relative z-10 container mx-auto px-6 h-full flex flex-col justify-center items-center text-center text-white">
      <h1 class="text-4xl md:text-5xl font-semibold mb-4">Explorez les merveilles du monde</h1>
      <p class="max-w-2xl mb-8">
        Partez à la découverte des cultures, paysages et traditions du monde entier. Explorez des monuments historiques, savourez des cuisines uniques et émerveiller-vous devant les merveilles naturelles.
      </p>
      <a href="#" class="bg-secondary text-primary px-8 py-3 rounded-full text-lg font-medium hover:bg-opacity-90">
        Réserver Une Voyage
      </a>
    </div>
  </section>

 <!-- Image Grid -->
 <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-16">
    <div class="aspect-square overflow-hidden">
        <img 
            src="{{ asset('images/torii.jpg') }}" 
            alt="Japanese torii gates in autumn forest" 
            class="object-cover w-full h-full"
        >
    </div>
    <div class="aspect-square overflow-hidden">
        <img 
            src="{{ asset('images/positano.jpg') }}" 
            alt="Positano, Italy coastal town" 
            class="object-cover w-full h-full"
        >
    </div>
    <div class="aspect-square overflow-hidden">
        <img 
            src="{{ asset('images/versailles.jpg') }}" 
            alt="Palace of Versailles" 
            class="object-cover w-full h-full"
        >
    </div>
    <div class="aspect-square overflow-hidden">
        <img 
            src="{{ asset('images/angel-statue.jpg') }}" 
            alt="Statue with angel wings" 
            class="object-cover w-full h-full"
        >
    </div>
    <div class="aspect-square overflow-hidden">
        <img 
            src="{{ asset('images/chefchaouen.jpg') }}" 
            alt="Chefchaouen, Morocco blue city" 
            class="object-cover w-full h-full"
        >
    </div>
    <div class="aspect-square overflow-hidden">
        <img 
            src="{{ asset('images/forbidden-city.jpg') }}" 
            alt="Forbidden City in Beijing" 
            class="object-cover w-full h-full"
        >
    </div>
</div>

<!-- Experience Sections -->
<div class="flex flex-col">
    <!-- Section principale -->
    <div class="flex flex-col md:flex-row p-4 mb-8">
      <!-- Image des pyramides (côté gauche) -->
      <div class="md:w-1/2 mb-4 md:mb-0 md:mr-6">
        <img 
          src="/images/egypte.jpg" 
          alt="Pyramides d'Égypte" 
          class="w-full h-auto rounded"
        >
      </div>
      
      <!-- Sections texte (côté droit) -->
      <div class="md:w-1/2 flex flex-col space-y-[100px]">
        <!-- Monument Emblématique -->
        <div class="flex">
          <div class="w-1 bg-black mr-3"></div>
          <div>
            <h2 class="text-xl font-medium mb-1">Monument Emblématique</h2>
            <p class="text-sm text-gray-700">
              Visitez les monuments les plus emblématiques du monde et explorez 
              leurs environs à couper le souffle.
            </p>
          </div>
        </div>
        
        <!-- Délices Culinaires -->
        <div class="flex">
          <div class="w-1 bg-black mr-3"></div>
          <div>
            <h2 class="text-xl font-medium mb-1">Délices Culinaires</h2>
            <p class="text-sm text-gray-700">
              Savourez des cuisines authentiques du monde entier avec des visites 
              gastronomiques guidées.
            </p>
          </div>
        </div>
        
        <!-- Expériences Culturelles -->
        <div class="flex">
          <div class="w-1 bg-black mr-3"></div>
          <div>
            <h2 class="text-xl font-medium mb-1">Expériences Culturelles</h2>
            <p class="text-sm text-gray-700">
              Plongez dans les cultures traditionnelles du monde entier en visitant des 
              temples historiques, des sanctuaires et des sites patrimoniaux.
            </p>
          </div>
        </div>
      </div>
    </div>   
  </div>

<!-- CTA Section -->

<div class="bg-red-100 mb-10">
    <div class="bg-white rounded-lg p-8 md:p-12 text-center md:text-left flex flex-col md:flex-row items-center justify-between -rotate-[2deg] shadow-lg">
      <div class="mb-6 md:mb-0 md:max-w-xl">
        <h2 class="text-2xl md:text-3xl font-medium mb-4">Prêt à explorer le monde ?</h2>
        <p class="text-gray-700">
          Parcourez nos voyages préprogrammés vers des destinations à couper le souffle dans le monde entier et plongez-vous dans les riches cultures et histoires de pays fascinants.
        </p>
      </div>
      <a 
        href="#"
        class="bg-[#e5c9a5] text-black px-8 py-3 rounded-full font-medium hover:bg-[#d9b990] transition-colors"
      >
        Découvrir les voyages
      </a>
    </div>
  </div>
</div>
<section>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-20 ml-px">
        <div class="space-y-12">
            <!-- Itinéraires Uniques -->
            <div class="flex">
                <div class="w-1 h-auto bg-black mr-6"></div>
                <div>
                    <h2 class="text-2xl md:text-3xl font-medium mb-2">Itinéraires Uniques</h2>
                    <p class="text-gray-700">
                        Explorez des itinéraires soigneusement conçus incluant des visites de sites emblématiques à travers le monde, tels que des montagnes majestueuses, des châteaux historiques et d'autres merveilles incontournables.
                    </p>
                </div>
            </div>

            <!-- Expériences culturelles -->
            <div class="flex">
                <div class="w-1 h-auto bg-black mr-6"></div>
                <div>
                    <h2 class="text-2xl md:text-3xl font-medium mb-2">Expériences culturelles</h2>
                    <p class="text-gray-700">
                        Plongez-vous dans les cultures locales à travers des activités telles que des cuisines authentiques, des performances traditionnelles et des expériences culturelles uniques à travers le monde.
                    </p>
                </div>
            </div>

            <!-- Temps forts du festival -->
            <div class="flex">
                <div class="w-1 h-auto bg-black mr-6"></div>
                <div>
                    <h2 class="text-2xl md:text-3xl font-medium mb-2">Temps forts du festival</h2>
                    <p class="text-gray-700">
                        Assistez à des festivals culturels vibrants et soyez témoin de célébrations traditionnelles lors de votre voyage à travers le monde.
                    </p>
                </div>
            </div>
        </div>

        <!-- Food Image -->
        <div class="flex items-center justify-center">
            <img 
                src="{{ asset('images/koskos.jpg') }}" 
                alt="Plat traditionnel dans un bol décoratif" 
                class=" p-1 max-w-md w-full"
            >
        </div>
    </div>

    <!-- Middle Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-20 ml-px">
        <!-- Left Content -->
        <div>
            <h2 class="text-2xl md:text-3xl font-medium mb-4">Découvrez la puissance<br>de nos produits</h2>
            <p class="text-gray-700 mb-6">
                Découvrez une plateforme unique qui vous permet d'explorer les plus belles destinations du monde à travers des itinéraires soigneusement conçus.
            </p>
            <p class="text-gray-700 mb-6">
                Profitez d'une expérience immersive avec des activités culturelles authentiques, des sites emblématiques et des aventures inoubliables.
            </p>
            <a 
                href="#" 
                class="inline-block bg-[#e5c9a5] text-black px-8 py-3 rounded-full font-medium hover:bg-[#d9b990] transition-colors"
            >
                Découvrir les voyages
            </a>
        </div>

        <!-- Right Content - Steps -->
        <div class="space-y-4">
            <!-- Step 1 -->
            <div class="bg-[#e5c9a5] rounded-lg p-6 relative transform rotate-1 shadow-md ">
                <div class="absolute top-4 right-4 text-2xl font-bold">01</div>
                <h3 class="text-xl font-medium mb-2">Choisissez votre destination</h3>
                <p class="text-gray-800">
                    Sélectionnez la destination de votre choix et vivez une expérience de voyage inoubliable à travers le monde.
                </p>
            </div>

            <!-- Step 2 -->
            <div class="bg-[#0d3046] text-white rounded-lg p-6 relative transform -rotate-1 shadow-md">
                <div class="absolute top-4 right-4 text-2xl font-bold">02</div>
                <h3 class="text-xl font-medium mb-2">Sélectionnez votre itinéraire</h3>
                <p class="text-gray-200">
                    Parcourez une variété d'itinéraires de voyage préétablis mettant en avant des sites emblématiques, des festivals culturels et des expériences locales authentiques.
                </p>
            </div>

            <!-- Step 3 -->
            <div class="bg-[#e5c9a5] rounded-lg p-6 relative transform rotate-1 shadow-md">
                <div class="absolute top-4 right-4 text-2xl font-bold">03</div>
                <h3 class="text-xl font-medium mb-2">Personnalisez votre voyage</h3>
                <p class="text-gray-800">
                    Personnalisez votre voyage en ajoutant des activités optionnelles, en prolongeant votre séjour ou en améliorant votre hébergement.
                </p>
            </div>

            <!-- Step 4 -->
            <div class="bg-[#0d3046] text-white rounded-lg p-6 relative transform -rotate-1 shadow-md">
                <div class="absolute top-4 right-4 text-2xl font-bold">04</div>
                <h3 class="text-xl font-medium mb-2">Réservez votre voyage</h3>
                <p class="text-gray-200">
                    Réservez en toute sécurité vos vacances de rêve vers la destination de votre choix en quelques clics et préparez-vous pour une aventure culturelle immersive.
                </p>
            </div>

            <!-- Step 5 -->
            <div class="bg-[#e5c9a5] rounded-lg p-6 relative transform rotate-1 shadow-md">
                <div class="absolute top-4 right-4 text-2xl font-bold">05</div>
                <h3 class="text-xl font-medium mb-2">Création en groupe</h3>
                <p class="text-gray-800">
                    Gérez facilement vos voyages en groupe grâce à un système de paiement alterné innovant, garantissant une répartition équitable des dépenses et une transparence totale pour une expérience sereine et bien organisée.
                </p>
            </div>
        </div>
    </div>
</section>
 <!-- Titre et introduction -->
 <div class="text-center mb-16">
    <h1 class="text-3xl md:text-4xl font-medium mb-6">Témoignages</h1>
    <p class="max-w-3xl mx-auto text-gray-700">
        J'ai eu une expérience incroyable en explorant le monde à travers cette plateforme. L'itinéraire 
        était parfaitement planifié, me permettant de m'immerger dans des cultures variées et des 
        paysages à couper le souffle.
    </p>
</div>

<!-- Grille de témoignages -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-8 ">
    <!-- Témoignage 1 -->
    <div class="group border border-[#e5c9a5] p-6 rounded-lg hover:bg-[#E5C9A5] hover:text-white transform hover:rotate-1 transition duration-300 ease-in-out"> 
        <div class="flex items-center mb-4">
            <img 
                src="{{ asset('images/maria.jpg') }}" 
                alt="Maria Garcia" 
                class="w-16 h-16 rounded-full object-cover border-2 border-[#e5c9a5]"
            >
            <h3 class="ml-4 text-xl font-medium">Maria Garcia</h3>
        </div>
        <p class="text-gray-700 group-hover:text-white">
            Cette plateforme a réveillé mes sens (et mes papilles) aux cuisines variées et savoureuses du monde entier.
        </p>
    </div>
    <!-- Témoignage 2 -->
    <div class="group border border-[#e5c9a5] p-6 rounded-lg hover:bg-[#E5C9A5] hover:text-white transform hover:rotate-1 transition duration-300 ease-in-out">
        <div class="flex items-center mb-4">
            <img 
                src="{{ asset('images/david.jpg') }}" 
                alt="David Johnson" 
                class="w-16 h-16 rounded-full object-cover border-2 border-[#e5c9a5]"
            >
            <h3 class="ml-4 text-xl font-medium">David Johnson</h3>
        </div>
        <p class="text-gray-700 group-hover:text-white">
            L'attention portée aux détails dans l'élaboration de l'itinéraire a rendu mon voyage vraiment inoubliable, me permettant d'explorer le monde en toute simplicité et immersion.
        </p>
    </div>    

    <!-- Témoignage 3 -->
    <div class="group border border-[#e5c9a5] p-6 rounded-lg hover:bg-[#E5C9A5] hover:text-white transform hover:rotate-1 transition duration-300 ease-in-out">
        <div class="flex items-center mb-4">
            <img 
                src="{{ asset('images/sophie.jpg') }}" 
                alt="Sophie Smith" 
                class="w-16 h-16 rounded-full object-cover border-2 border-[#e5c9a5]"
            >
            <h3 class="ml-4 text-xl font-medium">Sophie Smith</h3>
        </div>
        <p class="text-gray-700 group-hover:text-white">
            Je recommande vivement ce service à tous ceux qui souhaitent vivre un voyage inoubliable et sans tracas à travers le monde.
        </p>
    </div>
    

    <!-- Témoignage 4 -->
    <div class="group border border-[#e5c9a5] p-6 rounded-lg hover:bg-[#E5C9A5] hover:text-white transform hover:rotate-1 transition duration-300 ease-in-out">
        <div class="flex items-center mb-4">
            <img 
                src="{{ asset('images/alxendar.jpg') }}" 
                alt="Alexandre Dubois" 
                class="w-16 h-16 rounded-full object-cover border-2 border-[#e5c9a5]"
            >
            <h3 class="ml-4 text-xl font-medium">Alexandre Dubois</h3>
        </div>
        <p class="text-gray-700 group-hover:text-white">
            Je suis rentré chez moi avec une nouvelle appréciation pour l'art et la culture du monde entier, grâce à cette expérience incroyable.
        </p>
    </div>    
</div>
</main>
@endsection
 