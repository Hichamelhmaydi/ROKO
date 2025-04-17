@extends('layouts/app')
@section('title','statistiques')
@section('content')
    <main>
        <div class="relative overflow-hidden">
            <!-- Formes de fond rouges -->
            <div class="absolute -left-48 top-0 w-[800px] h-[800px] rounded-full bg-[#a42a2a] -z-10"></div>
            <div class="absolute right-0 top-1/2 w-[600px] h-[600px] rounded-full bg-[#a42a2a] -z-10"></div>
            
            <div class="container mx-auto px-4 py-12">
                <!-- Menu hamburger (visible uniquement sur mobile) -->
                <div class="mb-12 md:hidden">
                    <div class="space-y-2">
                        <div class="w-16 h-1 bg-[#e5c9a5]"></div>
                        <div class="w-16 h-1 bg-[#e5c9a5]"></div>
                        <div class="w-16 h-1 bg-[#e5c9a5]"></div>
                    </div>
                </div>
                
                <!-- Trajets les plus réservés -->
                <section class="mb-20">
                    <h1 class="text-5xl font-light text-white mb-12 ml-4">trajets les plus réserv<span class="text-black">és</span></h1>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Danemark -->
                        <div class="relative">
                            <div class="bg-[#e5c9a5] rounded-3xl   text-[#a42a2a] text-2xl font-medium mb-2  w-[1]">
                               <p class="justify-center flex"> danemark</p>
                                <img src="images/denmark.jpg" alt="Dn" class="w-full h-64 object-cover rounded-3xl overflow-hidden">
                            </div>
                        </div>
                        
                        <!-- Japon -->
                        <div class="relative">
                            <div class="bg-[#e5c9a5] rounded-3xl   text-[#a42a2a] text-2xl font-medium mb-2  w-[1]">
                               <p class="justify-center flex"> Japon</p>
                                <img src="images/japon.png" alt="jp" class="w-full h-64 object-cover rounded-3xl overflow-hidden">
                            </div>
                        </div>
                        
                        <!-- America -->
                        <div class="relative">
                            <div class="bg-[#e5c9a5] rounded-3xl   text-[#a42a2a] text-2xl font-medium mb-2  w-[1]">
                               <p class="justify-center flex"> America</p>
                                <img src="images/freedom.png" alt="USA" class="w-full h-64 object-cover rounded-3xl overflow-hidden">
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Statistiques -->
                <section class="mb-20">
                    <h2 class="text-4xl font-bold text-white mb-12">Statistiques</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Nombre d'utilisateurs -->
                        <div class="bg-[#e5c9a5] rounded-3xl p-6 text-center">
                            <h3 class="text-xl text-[#a42a2a] mb-2">Nombre d'utilisateurs</h3>
                            <p class="text-7xl font-bold text-[#a42a2a]">10</p>
                        </div>
                        
                        <!-- Nombre de réservations -->
                        <div class="bg-[#e5c9a5] rounded-3xl p-6 text-center">
                            <h3 class="text-xl text-[#a42a2a] mb-2">Nombre de réservations</h3>
                            <p class="text-7xl font-bold text-[#a42a2a]">10</p>
                        </div>
                        
                        <!-- Nombre des avis -->
                        <div class="bg-[#e5c9a5] rounded-3xl p-6 text-center">
                            <h3 class="text-xl text-[#a42a2a] mb-2">Nombre des avis</h3>
                            <p class="text-7xl font-bold text-[#a42a2a]">10</p>
                        </div>
                        
                        <!-- Nombre des activités -->
                        <div class="bg-[#e5c9a5] rounded-3xl p-6 text-center">
                            <h3 class="text-xl text-[#a42a2a] mb-2">Nombre des activités</h3>
                            <p class="text-7xl font-bold text-[#a42a2a]">10</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        
    </main>
@endsection