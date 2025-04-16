<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ROKO - Explorez les merveilles du monde</title>
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
<body class="bg-background min-h-screen flex flex-col">
  <!-- Header -->
  <header class="bg-primary text-white py-4 px-6 flex justify-between items-center">
    <div class="flex items-center">
      <div class="text-2xl font-bold mr-12">
        <img src="/roko-logo.png" alt="ROKO" class="h-8">
      </div>
      <nav class="hidden md:flex space-x-8">
        <a href="#" class="hover:text-secondary">Home</a>
        <a href="#" class="hover:text-secondary">Destination</a>
        <a href="#" class="hover:text-secondary">Expériences</a>
        <a href="#" class="hover:text-secondary">Contact</a>
      </nav>
    </div>
    <div class="flex space-x-4">
      <a href="#" class="bg-secondary text-primary px-6 py-1 rounded-full hover:bg-opacity-90">Inscription</a>
      <a href="#" class="border border-white px-6 py-1 rounded-full hover:bg-white hover:text-primary">connexion</a>
    </div>
  </header>
<body>
    <main>
  <!-- Hero Section -->
  <section class="relative h-[500px]">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/hero-image.jpg')"></div>
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

  <!-- Search Section -->
  <section class="py-8 px-6">
    <div class="container mx-auto flex justify-center">
      <div class="relative w-full max-w-2xl flex">
        <input 
          type="text" 
          placeholder="ex : Danemark" 
          class="w-full bg-secondary bg-opacity-50 rounded-full py-3 px-6 pr-12 focus:outline-none"
        >
        <button class="absolute right-12 top-1/2 transform -translate-y-1/2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </button>
     
      </div>
      <button class="ml-4 bg-white p-3 rounded-full shadow">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
        </svg>
      </button>
    </div>
  </section>

  <!-- Destinations Section -->
  <section class="py-8 px-6">
    <div class="container mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Featured Destination -->
        <div class="rounded-3xl overflow-hidden shadow-lg">
          <div class="relative">
            <img src="/denmark.jpg" alt="Denmark" class="w-full h-64 object-cover">
            <h3 class="absolute bottom-4 left-4 text-2xl text-accent font-medium ">denmark</h3>
          </div>
          <div class="flex">
            <a href="#" class="flex-1 py-3 text-center bg-secondary font-medium rounded-full m-2">détails</a>
            <a href="#" class="flex-1 py-3 text-center bg-accent text-white font-medium rounded-full m-2">réservation</a>
          </div>
          <div>
            <a href="#" class="block py-3 text-center bg-secondary bg-opacity-70 font-medium rounded-full m-2">commentaires</a>
          </div>
        </div>
</main>
  <!-- Footer -->
  <footer class="bg-primary text-white mt-auto py-8">
    <div class="container mx-auto px-6">
      <div class="flex flex-col items-center mb-8">
        <img src="/roko-logo.png" alt="ROKO" class="h-10 mb-6">
        <div class="flex space-x-12 mb-4">
          <a href="#" class="hover:text-secondary">Destination</a>
          <a href="#" class="hover:text-secondary">Contact</a>
          <a href="#" class="hover:text-secondary">A propos</a>
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
            <span>© 2025 ROKO.com</span>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
