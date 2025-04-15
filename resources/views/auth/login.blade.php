<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - ROKO</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body class="bg-[#0d3046] text-white min-h-screen flex flex-col items-center justify-center p-4">
    <div class="w-full max-w-md flex flex-col items-center">
        <img src="/images/ROKO.jpg" alt="ROKO logo" class="w-[229px] h-[134]">
        <h1 class="text-5xl font-light mb-12 text-center">connexion au compte</h1>
        
        <form method="POST" action="{{ route('login') }}" class="w-full">
            @csrf
            
            <div class="mb-6">
                <label for="email" class="block mb-2">Email :</label>
                <input type="email" id="email" name="email" class="w-full bg-white text-[#0d3046] rounded-full px-4 py-2" required>
            </div>
            
            <div class="mb-10">
                <label for="password" class="block mb-2">Mots de passe :</label>
                <input type="password" id="password" name="password" class="w-full bg-white text-[#0d3046] rounded-full px-4 py-2" required>
            </div>
            
            <div class="flex justify-center">
                <button type="submit" class="bg-[#a42a2a] text-white px-12 py-3 rounded-full text-xl">
                    connexion
                </button>
            </div>

            <div class="mt-6 text-center">
                <p>
                    Vous n'avez pas de compte ? 
                    <a href="{{ route('register') }}" class="underline">S'inscrire</a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>
