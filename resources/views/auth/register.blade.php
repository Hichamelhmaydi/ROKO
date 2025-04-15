<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire - ROKO</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body class="bg-[#0d3046] text-white min-h-screen flex flex-col items-center justify-center p-4">
    <img src="/images/ROKO.jpg" alt="ROKO logo" class="w-[229px] h-[134]">
    <div class="w-full max-w-md flex flex-col items-center">
        <!-- Form Title -->
        <h1 class="text-5xl font-light mb-4 text-center">S'inscrire</h1>
        
        <!-- Login Link -->
        <p class="mb-8 text-center">
            Vous avez déjà un compte ? 
            <a href="{{ route('login') }}" class="underline">Se connecter</a>
        </p>

        <!-- Registration Form -->
        <form method="POST" action="{{ route('register') }}" class="w-full">
            @csrf
            
            <!-- First Name & Last Name Row -->
            <div class="flex flex-col md:flex-row gap-4 mb-4">
                <div class="flex-1">
                    <label for="prenom" class="block mb-2">Prénom:</label>
                    <input type="text" id="prenom" name="prenom" class="w-full bg-white text-[#0d3046] rounded-full px-4 py-2" required>
                </div>
                
                <div class="flex-1">
                    <label for="nom" class="block mb-2">Nom :</label>
                    <input type="text" id="nom" name="nom" class="w-full bg-white text-[#0d3046] rounded-full px-4 py-2" required>
                </div>
            </div>
            
            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block mb-2">Email :</label>
                <input type="email" id="email" name="email" class="w-full bg-white text-[#0d3046] rounded-full px-4 py-2" required>
            </div>
            
            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block mb-2">Mots de passe :</label>
                <input type="password" id="password" name="password" class="w-full bg-white text-[#0d3046] rounded-full px-4 py-2" required>
            </div>
            
            <!-- Phone Number -->
            <div class="mb-8">
                <label for="telephone" class="block mb-2">Numéro de téléphone :</label>
                <input type="tel" id="telephone" name="telephone" class="w-full bg-white text-[#0d3046] rounded-full px-4 py-2" required>
            </div>
            
            <!-- Submit Button -->
            <div class="flex justify-center">
                <button type="submit" class="bg-[#a42a2a] text-white px-12 py-3 rounded-full text-xl">
                    S'inscrire
                </button>
            </div>
        </form>
    </div>
</body>
</html>
