@extends('layouts/app')
@section('title','avis')
@section('content')
<main>
    <div class="container mx-auto px-4 py-8">
        <!-- Cercle rouge avec titre -->
        <div class="relative mb-8">
            <div class="absolute -z-10 w-96 h-96 rounded-full bg-[#A42A2A] right-0 top-0"></div>
            <h1 class="text-black text-4xl font-light text-center pt-24">les Commentaires</h1>
        </div>

        <!-- Tableau des commentaires -->
        <div class="bg-secondary rounded-lg overflow-hidden shadow-lg max-w-4xl mx-auto mb-16">
            <table class="w-full">
                <thead>
                    <tr class="text-left">
                        <th class="px-6 py-4 text-xl">ID</th>
                        <th class="px-6 py-4 text-xl">ID-voyage</th>
                        <th class="px-6 py-4 text-xl">contenu</th>
                        <th class="px-6 py-4 text-xl">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-6 py-4 text-xl">1</td>
                        <td class="px-6 py-4 text-xl">1</td>
                        <td class="px-6 py-4">
                            of type and scrambled it to make a type specimen book
                        </td>
                        <td><button type="submit"><img src="images/supprimer.png" alt="supprimer" width="30px" height="30px"></button></td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-xl">2</td>
                        <td class="px-6 py-4 text-xl">2</td>
                        <td class="px-6 py-4">
                            of type and scrambled it to make a type specimen book
                        </td>
                        <td><button type="submit"><img src="images/supprimer.png" alt="supprimer" width="30px" height="30px"></button></td>
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

        <!-- Titre statistiques et points -->
        <div class="relative mb-8">
            <div class="absolute -z-10 w-96 h-96 rounded-full bg-[#A42A2A] right-[489px] -top-[220px]"></div>
            <div class="absolute -z-10 w-96 h-96 rounded-full bg-[#A42A2A] right-0 -top-[5px]"></div>
            <h2 class="text-3xl font-light text-center mb-8">les  <span class="text-white">statistique et les points</span></h2>
        </div>

        <!-- Tableau des statistiques -->
        <div class="bg-secondary rounded-lg overflow-hidden shadow-lg max-w-4xl mx-auto">
            <table class="w-full">
                <thead>
                    <tr class="text-left">
                        <th class="px-6 py-4 text-xl">ID</th>
                        <th class="px-6 py-4 text-xl">Nombre de commentaires</th>
                        <th class="px-6 py-4 text-xl">Les Points</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-6 py-4 text-center text-2xl">1</td>
                        <td class="px-6 py-4 text-center text-2xl">50</td>
                        <td class="px-6 py-4 text-center text-2xl">50</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-center text-2xl">2</td>
                        <td class="px-6 py-4 text-center text-2xl">50</td>
                        <td class="px-6 py-4 text-center text-2xl">50</td>
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
    </div>

</main>
@endsection