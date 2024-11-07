<nav>
    <ul class="md:flex items-center justify-start text-base text-black font-bold pt-4 md:pt-0 hidden md:flex" id="menu">
        <li><a class="md:p-4 py-3 px-0 block text-lg" href="{{ route('welcome') }}">Inicio</a></li>
        <li><a class="md:p-4 py-3 px-0 block text-lg" href="{{ route('gallery') }}">Galerías de eventos</a></li>
        <li><a class="md:p-4 py-3 px-0 block text-lg" href="{{ route('artists') }}">Catalogo de emprendedores</a></li>
        <!-- <li><a class="md:p-4 py-3 px-0 block text-lg" href="{{ route('indexLanding') }}">Rutas</a></li> -->
        <li><a class="md:p-4 py-3 px-0 block text-lg" href="{{ route('storeUser') }}">Tienda</a></li>
        <li><a class="md:p-4 py-3 px-0 block text-lg" href="{{ route('contacto.index') }}">Contáctenos</a></li>
        @auth
            <li><a class="md:p-4 py-3 px-0 block text-lg" href="{{ route('dashboard') }}">Regresar al panel</a></li>
            <li><a class="md:p-4 py-3 px-0 block" href="{{ route('viewCart') }}"><img src="{{ asset('storage/img/cart-shopping-solid.svg') }}" class="h-5"></a></li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="md:p-4 py-3 px-0 block bg-transparent text-black font-bold text-lg border-0">Cerrar sesión</button>
                </form>
            </li>
        @else
            <li><a class="md:p-4 py-3 px-0 block text-lg" href="{{ route('login') }}">Iniciar sesión</a></li>
        @endauth
    </ul>
    <!-- Menú desplegable para móviles -->
    <div class="md:hidden relative z-10">
    <button id="menu-toggle" class="text-black focus:outline-none">
        <ion-icon name="menu" size="large"></ion-icon>
    </button>
    <ul id="mobile-menu" class="lg:hidden hidden flex flex-col space-y-2 bg-white/90 p-4 absolute top-12 left-16 right-0 shadow-lg rounded-lg w-64 h-auto">
        <li><a class="p-4 block text-lg" href="{{ route('welcome') }}">Inicio</a></li>
        <li><a class="p-4 block text-lg" href="{{ route('gallery') }}">Galería</a></li>
        <li><a class="p-4 block text-lg" href="{{ route('artists') }}">Catalogo</a></li>
        <!-- <li><a class="p-4 block text-lg" href="{{ route('indexLanding') }}">Rutas</a></li> -->
        <li><a class="p-4 block text-lg" href="{{ route('storeUser') }}">Tienda</a></li>
        <li><a class="p-4 block text-lg" href="{{ route('contacto.index') }}">Contáctenos</a></li>
        @auth
            <li><a class="p-4 block text-lg" href="{{ route('dashboard') }}">Regresar al panel</a></li>
            <li><a class="p-4 block" href="{{ route('viewCart') }}"><img src="{{ asset('storage/img/cart-shopping-solid.svg') }}" class="h-5"></a></li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left p-4 bg-transparent text-black font-bold text-lg border-0">Cerrar sesión</button>
                </form>
            </li>
        @else
            <li><a class="p-4 block text-lg" href="{{ route('login') }}">Iniciar sesión</a></li>
        @endauth
    </ul>
</div>

</nav>