<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galería</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex items-center justify-center">

    <!-- Fondo con degradado -->
    <div class="relative w-full min-h-screen bg-cover bg-center bg-fixed" 
         style="background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.7), rgba(50, 50, 50, 0.7));">

        <!-- Contenido de la página -->
        <div class="content">
            <header class="lg:px-16 px-4 flex items-center justify-between py-4">
                
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="#" class="text-4xl font-extrabold text-white">
                        <img src="{{ asset('storage/img/logo.png') }}" class="h-20">
                    </a>
                </div>
                
                <!-- Menú de navegación -->
                <div class="hidden lg:flex space-x-8">
                    @include('components.nav_landing')
                </div>

                <!-- Iconos de redes sociales -->
                <div class="hidden lg:flex items-center space-x-4">
                    <a href="https://www.facebook.com/pantagoras.cultura/" target="_blank" class="no-underline px-2 bg-white/50 rounded-full">
                        <ion-icon name="logo-facebook" size="large"></ion-icon> <!-- Tamaño aumentado -->
                    </a>
                    <a href="https://www.instagram.com/nature_pantagoras/?__d=11" target="_blank" class="no-underline px-2 bg-white/50 rounded-full">
                        <ion-icon name="logo-instagram" size="large"></ion-icon> <!-- Tamaño aumentado -->
                    </a>
                    <a href="https://wa.me/573117034930?text=Hola%2C%20me%20gustar%C3%ADa%20saber%20m%C3%A1s%20sobre%20sus%20productos" target="_blank" class="no-underline px-2 bg-white/50 rounded-full">
                        <ion-icon name="logo-whatsapp" size="large"></ion-icon> <!-- Tamaño aumentado -->
                    </a>
                </div>

                <!-- Botón de menú móvil -->
                <div class="lg:hidden flex items-center">
                    <button id="menu-toggle" class="text-white focus:outline-none">
                        <ion-icon name="menu" size="large"></ion-icon>
                    </button>
                </div>
            </header>

            <!-- Menú móvil desplegable -->
            <nav id="mobile-menu" class="lg:hidden hidden flex flex-col space-y-2 bg-white/90 p-4 absolute top-16 left-0 right-0 shadow-lg rounded-b-lg">
                @include('components.nav_landing')
                <div class="flex space-x-4 pt-4 border-t border-gray-200">
                    <a href="https://www.facebook.com/pantagoras.cultura/" target="_blank" class="no-underline px-2 bg-white/50 rounded-full">
                        <ion-icon name="logo-facebook" size="large"></ion-icon> <!-- Tamaño aumentado -->
                    </a>
                    <a href="https://www.instagram.com/nature_pantagoras/?__d=11" target="_blank" class="no-underline px-2 bg-white/50 rounded-full">
                        <ion-icon name="logo-instagram" size="large"></ion-icon> <!-- Tamaño aumentado -->
                    </a>
                    <a href="https://wa.me/573117034930?text=Hola%2C%20me%20gustar%C3%ADa%20saber%20m%C3%A1s%20sobre%20sus%20productos" target="_blank" class="no-underline px-2 bg-white/50 rounded-full">
                        <ion-icon name="logo-whatsapp" size="large"></ion-icon> <!-- Tamaño aumentado -->
                    </a>
                </div>
            </nav>
            
            <!-- Sección principal de la página -->
            <div class="flex flex-col items-center justify-center font-bold text-center">
                <h1 class="text-2xl font-medium title-font mb-4 text-gray-900">
                    Galerías de eventos
                </h1>

                <!-- Sección combinada para videos y galería -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4">

                    <!-- Sección de Galería -->
                    @foreach ($gallery as $gallerys)
                    <a href="{{ route('viewGallery', $gallerys->id) }}">
                        <div class="relative rounded overflow-hidden shadow-lg bg-white">
                            <img src="{{ asset('storage/'.$gallerys->url) }}" alt="Gallery Image" class="w-full h-48 object-cover">
                            <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">
                                <p class="text-2xl">{{ $gallerys->name }}</p>
                                <p class="text-lg">{{ $gallerys->description }}</p>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
