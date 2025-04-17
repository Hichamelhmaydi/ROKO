@extends('layouts/app')
@section('title','profile')
@section('content')
<body class="bg-[#f5f5f5] min-h-screen flex flex-col">

    
    <!-- Main Content -->
    <main class="flex-grow container mx-auto py-8 px-4">
        <div class="max-w-4xl mx-auto">
            <!-- User Profile Section -->
            <div class="flex flex-col md:flex-row gap-8 mb-12">
                <!-- User Avatar -->
                <div class="flex flex-col items-center">
                    <div class="w-36 h-36 rounded-full border-2 border-gray-300 overflow-hidden mb-4">
                     <img src="images/User.png" alt="user">
                    </div>
                    <button class="bg-[#e5c9a5] text-[#0d3046] px-4 py-2 rounded-full hover:bg-[#d5b995] text-sm">
                        Modifier le photo
                    </button>
                </div>
                
                <!-- User Information Form -->
                <div class="flex-1 space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-700 mb-1">Prénom:</label>
                            <input type="text" placeholder="EX : ALI" class="w-full bg-[#e5c9a5] rounded-full px-4 py-2 text-[#0d3046]" >
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-1">Nom :</label>
                            <input type="text" placeholder="EX : ALI" class="w-full bg-[#e5c9a5] rounded-full px-4 py-2 text-[#0d3046]" >
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 mb-1">Email :</label>
                        <input type="email" placeholder="EX : xxxxxx@gmail.com" class="w-full bg-[#e5c9a5] rounded-full px-4 py-2 text-[#0d3046]" >
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 mb-1">Mots de passe :</label>
                        <input type="password" placeholder="xxxxxxx" class="w-full bg-[#e5c9a5] rounded-full px-4 py-2 text-[#0d3046]" >
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 mb-1">Numéro de téléphone :</label>
                        <input type="tel" placeholder="EX : 0778408789" class="w-full bg-[#e5c9a5] rounded-full px-4 py-2 text-[#0d3046]" >
                    </div>
                    
                    <div class="flex justify-center mt-6">
                        <button class="bg-[#e5c9a5] text-[#0d3046] px-6 py-2 rounded-full hover:bg-[#d5b995]">
                            Modifier les informations
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Reservations Section -->
            <div class="space-y-6">
                <div class="text-center">
                    <p class="bg-[#e5c9a5] text-[#0d3046] px-8 py-3 rounded-full hover:bg-[#d5b995] text-lg ">
                        Mes réservations
                    </p>
                </div>
                
                <!-- Reservation Card -->
                <div class="bg-[#0d3046] text-white rounded-lg overflow-hidden">
                    <div class="flex flex-col md:flex-row">
                        <!-- Reservation Image -->
                        <div class="md:w-1/4">
                            <img src="{{ asset('images/denmark.jpg') }}" alt="Denmark" class="w-full h-full object-cover">
                        </div>
                        
                        <!-- Reservation Details -->
                        <div class="md:w-3/4 p-6 flex flex-col md:flex-row justify-between relative">
                            <!-- Trip Information -->
                            <div class="space-y-2">
                                <p><span class="font-medium">Départ :</span> Maroc</p>
                                <p><span class="font-medium">Arrival :</span> Danemark</p>
                                <p><span class="font-medium">Date de réservation :</span> 02/02/2025</p>
                                <p><span class="font-medium">Type de voyage :</span> Individuel ou groupe</p>
                                
                                <div class="flex space-x-4 mt-6">
                                    <button class="bg-[#e5c9a5] text-[#0d3046] px-4 py-2 rounded-full hover:bg-[#d5b995]">
                                        Détail de voyage
                                    </button>
                                    <button class="bg-[#a42a2a] text-white px-4 py-2 rounded-full hover:bg-red-700">
                                        Supprimer cette voyage
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Reservation Number -->
                            <div class="absolute top-4 right-4 md:static">
                                <div class="bg-[#e5c9a5] text-[#0d3046] w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold">
                                    01
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
</body>
@endsection