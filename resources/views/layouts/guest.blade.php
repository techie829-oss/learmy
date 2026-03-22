<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Learmy Admin') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">

        <!-- GSAP -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            .bg-primary { background-color: #050505; }
            .text-accent { color: #D4AF37; }
            .login-card {
                background: rgba(15, 15, 15, 0.7);
                backdrop-filter: blur(20px);
                border: 1px solid rgba(212, 175, 55, 0.15);
            }
            .gold-input {
                background: rgba(255, 255, 255, 0.03) !important;
                border: 1px solid rgba(255, 255, 255, 0.1) !important;
                color: white !important;
                border-radius: 12px !important;
                transition: all 0.3s ease !important;
            }
            .gold-input:focus {
                border-color: #D4AF37 !important;
                box-shadow: 0 0 15px rgba(212, 175, 55, 0.1) !important;
                outline: none !important;
            }
            .instrument-bg {
                position: fixed;
                opacity: 0.08;
                pointer-events: none;
                z-index: 0;
            }
            @keyframes float {
                0%, 100% { transform: translateY(0px) rotate(0deg); }
                50% { transform: translateY(-30px) rotate(8deg); }
            }
        </style>
    </head>
    <body class="font-sans text-gray-200 antialiased bg-primary overflow-y-auto">
        <!-- Floating Musical Background Elements -->
        <div class="instrument-bg top-20 -left-10" style="animation: float 12s ease-in-out infinite;">
            <svg width="400" height="400" viewBox="0 0 100 100" fill="#D4AF37">
                <path d="M50 8 L50 30 C42 30 35 28 30 32 C22 38 20 48 22 55 C18 58 15 63 15 70 C15 82 25 92 38 92 L62 92 C75 92 85 82 85 70 C85 63 82 58 78 55 C80 48 78 38 70 32 C65 28 58 30 50 30 Z"/>
            </svg>
        </div>
        <div class="instrument-bg -bottom-20 -right-20" style="animation: float 15s ease-in-out infinite reverse;">
            <svg width="500" height="500" viewBox="0 0 100 100" fill="#D4AF37">
                <path d="M30 20 L70 30 L70 80 C70 85 65 90 60 90 C55 90 50 85 50 80 L50 40 L30 35 L30 70 C30 75 25 80 20 80 C15 80 10 75 10 70 L10 20 Z" />
            </svg>
        </div>

        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 relative z-10 px-6">
            <div id="loginCard" class="w-full sm:max-w-md mt-6 px-10 py-12 login-card shadow-2xl overflow-hidden sm:rounded-[2.5rem]">
                {{ $slot }}
            </div>

            <p class="mt-8 text-gray-500 text-sm opacity-50">&copy; {{ date('Y') }} Learmy Educoach Institute</p>
        </div>

        <script>
            window.addEventListener('load', () => {
                gsap.from("#loginCard", { y: 100, opacity: 0, duration: 1.2, delay: 0.2, ease: "power3.out" });
            });
        </script>
    </body>
</html>
