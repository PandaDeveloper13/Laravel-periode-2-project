<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Techniek College Rotterdam</title>
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
        .gradient-bg {
            background: linear-gradient(135deg, #003d2b 0%, #1a3a2f 100%);
        }
        .gradient-text {
            background: linear-gradient(135deg, #d4e600 0%, #f39200 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="gradient-bg min-h-screen flex items-center justify-center font-sans">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="relative bg-white rounded-2xl shadow-2xl p-10 w-full max-w-md animate-fade-in backdrop-blur">
        <div class="text-center mb-10">
            <div class="flex justify-center mb-4">
                <div class="w-20 h-20 bg-gradient-to-br from-tcr-lime to-tcr-gold rounded-2xl flex items-center justify-center shadow-lg transform rotate-3 hover:rotate-0 transition-transform duration-300">
                    <span class="text-4xl text-white font-bold">T</span>
                </div>
            </div>
            <h1 class="text-3xl font-bold text-tcr-green mb-2">Welkom terug!</h1>
            <p class="text-gray-600">Keuzedeel Systeem - Techniek College Rotterdam</p>
        </div>

        <form method="POST" action="" class="space-y-4">
            <div>
                <button type="button" class="w-full bg-gradient-to-r from-tcr-green to-tcr-dark text-white py-4 px-6 rounded-xl font-semibold hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300 flex items-center justify-center gap-3">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M3 3h8v8H3V3zm10 0h8v8h-8V3zM3 13h8v8H3v-8zm10 0h8v8h-8v-8z"/></svg>
                    Login met Microsoft
                </button>
            </div>

            <div class="relative py-4">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-4 bg-white text-gray-500">Of gebruik je inschrijfcode</span>
                </div>
            </div>

            <div>
                <label class="block text-gray-700 text-sm font-medium mb-2">Inschrijfcode</label>
                <input type="text" name="inschrijfcode" placeholder="Voer je code in" 
                       class="w-full border-2 border-gray-200 rounded-xl py-3 px-4 focus:outline-none focus:border-tcr-lime focus:ring-4 focus:ring-tcr-lime/20 transition-all duration-300">
            </div>

            <div>
                <button type="submit" class="w-full bg-gradient-to-r from-tcr-lime to-tcr-gold text-tcr-green py-4 px-6 rounded-xl font-bold hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300">
                    Inloggen
                </button>
            </div>
        </form>

        <div class="mt-8 text-center">
            <p class="text-sm text-gray-500">Nog geen account? <a href="#" class="text-tcr-green font-semibold hover:text-tcr-gold transition-colors">Neem contact op</a></p>
        </div>
    </div>
</body>
</html>