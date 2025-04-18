@extends('layouts/app')
@section('title','statistiques')
@section('content')
<main>
    <div class="absolute -left-48 top-0 w-[800px] h-[800px] rounded-full bg-[#a42a2a] -z-10"></div>
    <div class="absolute right-0 top-1/2 w-[400px] h-[400px] rounded-full bg-[#a42a2a] -z-10"></div>
        <div class="container mx-auto px-4 pt-8 flex items-center">
            <img src="images/vector.png" alt="vector" class="mr-[50px] mb-[50px]">
            <h1 class="text-white text-3xl ml-4 font-bold">les Réservatio<span class="text-black">ns</span></h1>
        </div>
    </div>
    <div class="container mx-auto px-4 pb-16">
        <!-- Tableau des réservations -->
        <div class="bg-secondary rounded-lg overflow-hidden shadow-lg mb-8">
            <table class="w-full">
                <thead>
                    <tr class="text-dark">
                        <th class="py-4 px-6 text-left font-bold text-xl">ID</th>
                        <th class="py-4 px-6 text-right font-bold text-xl">Date</th>
                        <th class="py-4 px-6 text-right font-bold text-xl">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t border-gray-300 border-opacity-30">
                        <td class="py-4 px-6 text-left text-xl font-bold">1</td>
                        <td class="py-4 px-6 text-right text-xl">10-05-2026</td>
                        <td class="py-4 px-6 text-right">
                            <div class="flex justify-end space-x-4">
                                <button class="text-dark">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </button>
                                <button class="text-dark">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-t border-gray-300 border-opacity-30">
                        <td class="py-4 px-6 text-left text-xl font-bold">2</td>
                        <td class="py-4 px-6 text-right text-xl">10-05-2026</td>
                        <td class="py-4 px-6 text-right">
                            <div class="flex justify-end space-x-4">
                                <button class="text-dark">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </button>
                                <button class="text-dark">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-t border-gray-300 border-opacity-30">
                        <td class="py-4 px-6 text-left text-xl font-bold">3</td>
                        <td class="py-4 px-6 text-right text-xl">10-05-2026</td>
                        <td class="py-4 px-6 text-right">
                            <div class="flex justify-end space-x-4">
                                <button class="text-dark">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </button>
                                <button class="text-dark">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <!-- Pagination -->
            <div class="py-4 px-6 flex justify-center space-x-2">
                <button class="w-8 h-8 flex items-center justify-center rounded bg-gray-800 text-white">1</button>
                <button class="w-8 h-8 flex items-center justify-center rounded hover:bg-gray-200">2</button>
                <button class="w-8 h-8 flex items-center justify-center rounded hover:bg-gray-200">3</button>
                <span class="w-8 h-8 flex items-center justify-center">...</span>
                <button class="w-8 h-8 flex items-center justify-center rounded hover:bg-gray-200">67</button>
                <button class="w-8 h-8 flex items-center justify-center rounded hover:bg-gray-200">68</button>
            </div>
        </div>

        <!-- Statistiques -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Réservations confirmées -->
            <div class="space-y-2">
                <div class="flex justify-between">
                    <h3 class="text-lg font-bold text-white">Réservations confirmées <span class="font-bold text-white">10/20</span></h3>
                </div>
                <div class="progress-bar">
                    <div class="progress-bar-fill" style="width: 50%"></div>
                </div>
            </div>

            <!-- Réservations annulées -->
            <div class="space-y-2">
                <div class="flex justify-between">
                    <h3 class="text-lg font-bold text-dark"><span class="text-white"></span>Réservations annulées <span class="font-bold text-dark">10/20</span></h3>
                </div>
                <div class="progress-bar">
                    <div class="progress-bar-fill" style="width: 50%"></div>
                </div>
            </div>

            <!-- Réservations en attente -->
            <div class="space-y-2">
                <div class="flex justify-between">
                    <h3 class="text-lg font-bold text-dark">réservations s<span class="text-white">ont sur liste d'attente 10/20</span></h3>
                    
                </div>
                <div class="progress-bar">
                    <div class="progress-bar-fill" style="width: 50%"></div>
                </div>
            </div>
        </div>
    </div>


</main>
@endsection