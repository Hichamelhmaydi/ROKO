<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROKO - Voyages</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="relative overflow-x-hidden">
    <!-- Forme rouge de fond -->
    <div class="absolute -right-48 top-0 w-[800px] h-[800px] rounded-full bg-red-800 -z-10"></div>
    <div class="absolute -left-48 top-0 w-[800px] h-[800px] rounded-full bg-red-800 -z-10"></div>
    
    <!-- Header -->
    <header class="container mx-auto px-4 py-6 flex justify-between items-center">
        <div class="flex items-center">
            <div class="w-12 h-12 bg-amber-200 rounded-full flex items-center justify-center mr-2">
                <div class="w-6 h-6 bg-gray-700 rounded-sm"></div>
            </div>
            <span class="text-2xl font-bold text-gray-200">ROKO</span>
        </div>
        
        <nav class="hidden md:flex space-x-8 text-white">
            <a href="#" class="hover:text-amber-200">Home</a>
            <a href="#" class="hover:text-amber-200">Destination</a>
            <a href="#" class="hover:text-amber-200">Expériences</a>
            <a href="#" class="hover:text-amber-200">Contact</a>
        </nav>
        
        <div class="flex items-center space-x-4">
            <a href="#" class="bg-amber-200 text-gray-800 px-6 py-2 rounded-full hover:bg-amber-300 transition">
                déconnexion
            </a>
            <div class="w-10 h-10 bg-transparent border-2 border-amber-200 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </div>
        </div>
        
        <!-- Menu hamburger pour mobile -->
        <div class="md:hidden">
            <div class="space-y-2">
                <div class="w-8 h-0.5 bg-amber-200"></div>
                <div class="w-8 h-0.5 bg-amber-200"></div>
                <div class="w-8 h-0.5 bg-amber-200"></div>
            </div>
        </div>
    </header>

    <!-- Content -->
    <main>
    @yield('content')
    </main>
    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <!-- Logo -->
            <div class="flex justify-center mb-8">
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-amber-200 rounded-full flex items-center justify-center mb-2">
                        <div class="w-6 h-6 bg-gray-700 rounded-sm"></div>
                    </div>
                    <span class="text-3xl font-bold">ROKO</span>
                </div>
            </div>
            
            <!-- Navigation -->
            <div class="flex justify-center space-x-12 mb-8">
                <a href="#" class="hover:text-amber-200">Destination</a>
                <a href="#" class="hover:text-amber-200">Contact</a>
                <a href="#" class="hover:text-amber-200">A propos</a>
            </div>
            
            <hr class="border-gray-700 mb-8">
            
            <!-- Social et Copyright -->
            <div class="flex justify-center items-center space-x-8">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                    <span>ROKO</span>
                </div>
                
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span>ROKO@gmail.com</span>
                </div>
                
                <div>
                    <span>© 2025 ROKO.com</span>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
