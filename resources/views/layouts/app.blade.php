<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ROKO - @yield('title')</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
          tailwind.config = {
            theme: {
              extend: {
                colors: {
                  primary: "#0d3046",
                  secondary: "#e5c9a5",
                  accent: "#a42a2a",
                  background: "#f5f5f5",
                },
              }
            }
          }
        </script>      
      </head>
<body class="bg-[#f5f5f5] min-h-screen flex flex-col">
    <!-- Header -->
    <header class="bg-[#0d3046] text-white py-4 px-6 flex justify-between items-center">
        <div class="flex items-center">
            <div class="text-2xl font-bold mr-12">
                <a >
                    <img src="{{ asset('images/ROKO.jpg') }}" alt="ROKO" class="w-[70px]">
                </a>
            </div>
            <nav class="hidden md:flex space-x-[100px]">
                <a  class="hover:text-[#e5c9a5] hover:cursor-pointer">Home</a>
                <a  class="hover:text-[#e5c9a5] hover:cursor-pointer">Destination</a>
                <a class="hover:text-[#e5c9a5] hover:cursor-pointer">Expériences</a>
                <a class="hover:text-[#e5c9a5] hover:cursor-pointer">Contact</a>
            </nav>
        </div>
        <div class="flex space-x-4">
            <a  class="bg-[#e5c9a5] text-[#0d3046] px-6 py-1 rounded-full hover:bg-opacity-90 hover:cursor-pointer">Inscription</a>
            <a  class="border border-white px-6 py-1 rounded-full hover:bg-white hover:text-[#0d3046] hover:cursor-pointer">connexion</a>
        </div>
    </header>

    <!-- Content -->
    <main>
    @yield('content')
    </main>
    <!-- Footer -->
    <footer class="bg-[#0d3046] text-white mt-auto py-8">
        <div class="container mx-auto px-6">
            <div class="flex flex-col items-center mb-8">
                <img src="{{ asset('images/ROKO.jpg') }}" alt="ROKO" class="h-20 mb-6">
                <div class="flex space-x-12 mb-4">
                    <a  class="hover:text-[#e5c9a5]">Destination</a>
                    <a  class="hover:text-[#e5c9a5]">Contact</a>
                    <a  class="hover:text-[#e5c9a5]">A propos</a>
                </div>
                <div class="w-full max-w-md border-t border-gray-600 my-4"></div>
                <div class="flex flex-col md:flex-row justify-between items-center w-full max-w-md">
                    <div class="flex items-center mb-4 md:mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span>ROKO@gmail.com</span>
                    </div>
                    <div class="flex items-center">
                        <span>© {{ date('Y') }} ROKO.com</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
