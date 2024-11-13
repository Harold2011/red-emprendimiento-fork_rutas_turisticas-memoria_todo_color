<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galería</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen overflow-hidden">

    <!-- Fondo con degradado -->
    <div class="background-fixed fixed inset-0"></div>
    <div class="relative w-full h-full bg-no-repeat bg-cover bg-center bg-shadow bg-opacity-75"
         style="background-image: linear-gradient(to bottom right, rgba(255, 212, 128, 0.8), rgba(43, 203, 186, 0.8), rgba(43, 116, 185 , 0.8));">

        <!-- Contenido de la página -->
        <div class="content relative z-10 h-full overflow-auto">
            <header class="lg:px-16 px-4 flex items-center justify-between py-4">
                
                <!-- Logo -->
                <div class="flex-1 flex justify-between items-center">
                    <a href="#" class="text-4xl font-extrabold text-white">
                        <img src="{{ asset('storage/img/logo.png') }}" class="h-20">
                    </a>
                </div>
                @include('components/nav_landing')
            </header>

            <!-- Sección principal de la página -->
            <div class="flex flex-col items-center justify-center font-bold text-center">
                <h1 class="text-2xl font-medium title-font mb-4 text-white">
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
