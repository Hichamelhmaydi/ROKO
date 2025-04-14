<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Document</title>
</head>
<body>
    @extends('layouts.app')

@section('content')
<div class="min-h-screen bg-primary flex flex-col items-center pt-16 px-4">
    <div class="mb-16">
        <img src="{{ asset('images/roko-logo.png') }}" alt="ROKO Logo" class="w-[150px]">
    </div>

    <div class="w-full max-w-md flex flex-col items-center">
        <h1 class="text-white text-4xl font-light mb-4">S'inscrire</h1>

        <div class="text-white mb-10 text-center">
            Vous avez déjà un compte ?
            <a href="{{ route('login') }}" class="text-white hover:underline">
                Se connecter
            </a>
        </div>

        <form method="POST" action="{{ route('register') }}" class="w-full space-y-6">
            @csrf

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="firstname" class="block text-white mb-2">
                        Prénom:
                    </label>
                    <input 
                        type="text" 
                        id="firstname" 
                        name="firstname" 
                        class="w-full px-4 py-2 rounded-md bg-white" 
                        value="{{ old('firstname') }}" 
                        required 
                        autofocus
                    >
                    @error('firstname')
                        <span class="text-red-300 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="lastname" class="block text-white mb-2">
                        Nom :
                    </label>
                    <input 
                        type="text" 
                        id="lastname" 
                        name="lastname" 
                        class="w-full px-4 py-2 rounded-md bg-white" 
                        value="{{ old('lastname') }}" 
                        required
                    >
                    @error('lastname')
                        <span class="text-red-300 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div>
                <label for="email" class="block text-white mb-2">
                    Email :
                </label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    class="w-full px-4 py-2 rounded-md bg-white" 
                    value="{{ old('email') }}" 
                    required
                >
                @error('email')
                    <span class="text-red-300 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-white mb-2">
                    Mots de passe :
                </label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    class="w-full px-4 py-2 rounded-md bg-white" 
                    required
                >
                @error('password')
                    <span class="text-red-300 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="phone" class="block text-white mb-2">
                    Numéro de téléphone :
                </label>
                <input 
                    type="tel" 
                    id="phone" 
                    name="phone" 
                    class="w-full px-4 py-2 rounded-md bg-white" 
                    value="{{ old('phone') }}" 
                    required
                >
                @error('phone')
                    <span class="text-red-300 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="pt-6">
                <button
                    type="submit"
                    class="w-full bg-accent text-white py-3 px-4 rounded-full text-xl font-light hover:bg-accent/90 transition-colors"
                >
                    S'inscrire
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

</body>
</html>