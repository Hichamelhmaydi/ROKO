<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formule de Paiement - ROKO</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#0d3046] text-white min-h-screen flex flex-col items-center justify-center p-4">
    <div class="max-w-md w-full mx-auto">
        <!-- Logo -->
        <div class="flex justify-center mb-16">
            <img src="{{ asset('images/ROKO.jpg') }}" alt="ROKO" class="h-20">
        </div>
        
        <!-- Payment Form -->
        <div class="space-y-10">
            <h1 class="text-4xl font-serif text-center mb-16">Formule de Paiement :</h1>
            
            <form class="space-y-8">
                <!-- Card Number -->
                <div class="space-y-2">
                    <label for="card_number" class="text-xl">N° de carte :</label>
                    <input 
                        type="text" 
                        id="card_number" 
                        class="w-full bg-white text-[#0d3046] px-4 py-3 rounded-full focus:outline-none focus:ring-2 focus:ring-[#e5c9a5]" 
                        placeholder="1234 5678 9012 3456"
                    >
                </div>
                
                <!-- Expiration Date -->
                <div class="space-y-2">
                    <label for="expiration_date" class="text-xl">Date d'expiration :</label>
                    <input 
                        type="text" 
                        id="expiration_date" 
                        class="w-full bg-white text-[#0d3046] px-4 py-3 rounded-full focus:outline-none focus:ring-2 focus:ring-[#e5c9a5]" 
                        placeholder="MM/AA"
                    >
                </div>
                
                <!-- CVC -->
                <div class="space-y-2">
                    <label for="cvc" class="text-xl">Cvc :</label>
                    <input 
                        type="text" 
                        id="cvc" 
                        class="w-full bg-white text-[#0d3046] px-4 py-3 rounded-full focus:outline-none focus:ring-2 focus:ring-[#e5c9a5]" 
                        placeholder="123"
                    >
                </div>
                
                <!-- Submit Button -->
                <div class="pt-8">
                    <button 
                        type="submit" 
                        class="w-full bg-[#a42a2a] text-white text-xl py-4 rounded-full hover:bg-red-800 transition duration-300 focus:outline-none focus:ring-2 focus:ring-red-500"
                    >
                        Payez maintenant
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <script>
        // Simple form validation
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const cardInput = document.getElementById('card_number');
            const expirationInput = document.getElementById('expiration_date');
            const cvcInput = document.getElementById('cvc');
            
            // Format card number as user types
            cardInput.addEventListener('input', function(e) {
                let value = e.target.value.replace(/\D/g, '');
                if (value.length > 16) value = value.slice(0, 16);
                
                // Add spaces every 4 digits
                let formattedValue = '';
                for (let i = 0; i < value.length; i++) {
                    if (i > 0 && i % 4 === 0) {
                        formattedValue += ' ';
                    }
                    formattedValue += value[i];
                }
                
                e.target.value = formattedValue;
            });
            
            // Format expiration date as user types
            expirationInput.addEventListener('input', function(e) {
                let value = e.target.value.replace(/\D/g, '');
                if (value.length > 4) value = value.slice(0, 4);
                
                if (value.length > 2) {
                    e.target.value = value.slice(0, 2) + '/' + value.slice(2);
                } else {
                    e.target.value = value;
                }
            });
            
            // Limit CVC to 3 or 4 digits
            cvcInput.addEventListener('input', function(e) {
                let value = e.target.value.replace(/\D/g, '');
                if (value.length > 4) value = value.slice(0, 4);
                e.target.value = value;
            });
            
            // Form submission
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Basic validation
                if (cardInput.value.replace(/\s/g, '').length < 16) {
                    alert('Veuillez entrer un numéro de carte valide');
                    return;
                }
                
                if (expirationInput.value.length < 5) {
                    alert('Veuillez entrer une date d\'expiration valide');
                    return;
                }
                
                if (cvcInput.value.length < 3) {
                    alert('Veuillez entrer un code CVC valide');
                    return;
                }
                
                // If validation passes, you would normally submit the form
                alert('Paiement en cours de traitement...');
            });
        });
    </script>
</body>
</html>
