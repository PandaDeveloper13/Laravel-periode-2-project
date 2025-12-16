<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wachtwoord Vergeten - Techniek College Rotterdam</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'tcr-green': '#003d2b',
                        'tcr-dark': '#1a3a2f',
                        'tcr-lime': '#d4e600',
                        'tcr-gold': '#f39200',
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        .gradient-green {
            background: linear-gradient(to bottom right, #003d2b, #1a3a2f);
        }
        .gradient-lime {
            background: linear-gradient(to bottom right, #d4e600, #f39200);
        }
        .bg-pattern {
            background-color: #003d2b;
            background-image: 
                radial-gradient(circle at 25% 25%, rgba(212, 230, 0, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(243, 146, 0, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 50% 50%, rgba(255, 255, 255, 0.03) 0%, transparent 70%);
        }
        .floating {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
    </style>
</head>
<body class="bg-pattern min-h-screen font-sans flex items-center justify-center">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-tcr-lime/10 rounded-full blur-3xl floating"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-tcr-gold/10 rounded-full blur-3xl floating" style="animation-delay: -3s;"></div>
        <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-white/5 rounded-full blur-2xl"></div>
    </div>
    
    <div class="relative w-full max-w-md p-6">
        <div class="bg-white rounded-2xl shadow-2xl p-10">
            <div class="text-center mb-8">
                <div class="flex justify-center mb-4">
                    <div class="w-16 h-16 gradient-lime rounded-2xl flex items-center justify-center shadow-lg">
                        <span class="text-xl text-white font-bold">TCR</span>
                    </div>
                </div>
                <h2 class="text-3xl font-bold text-tcr-green mb-2">Wachtwoord vergeten?</h2>
                <p class="text-gray-600">Geen probleem! Vul je e-mailadres in en we sturen je een link om je wachtwoord te resetten.</p>
            </div>

            <form method="POST" action="" class="space-y-4">
                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-2">E-mailadres</label>
                    <input type="email" name="email" placeholder="naam@voorbeeld.nl" 
                           class="w-full border-2 border-gray-200 rounded-xl py-3 px-4 focus:outline-none focus:border-tcr-lime focus:ring-4 focus:ring-tcr-lime/20 transition-all duration-300">
                </div>

                <div>
                    <button type="submit" class="w-full gradient-lime text-tcr-green py-4 px-6 rounded-xl font-bold hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300">
                        Verstuur reset link
                    </button>
                </div>
            </form>

            <div class="mt-8 text-center">
                <a href="/login" class="inline-flex items-center text-tcr-green hover:text-tcr-gold transition-colors font-medium">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Terug naar inloggen
                </a>
            </div>
        </div>
    </div>
</body>
</html>
