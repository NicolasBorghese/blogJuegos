<header>
    <div class="flex items-center justify-center h-48 bg-gradient-to-r from-blue-950 to-rose-950">
        <a href="{{ route('home') }}"><img src="{{ asset('images/logo_blogJuegos.png') }}" alt="blogJuegos" class="w-50"></a>
    </div>

    <nav class="flex w-full justify-between bg-slate-900 px-10 py-2 text-white font-bold items-center h-20">
        <div class="">
            <ul  class="flex space-x-2 text-lg">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? "text-orange-400 underline" : '' }} mr-2 hover:text-blue-400">HOME</a>
                </li>
                <li><a href="{{ route('noticias.index') }}" class="{{ request()->routeIs('noticias.*') ? "text-orange-400 underline" : '' }} mr-2 hover:text-blue-400">NOTICIAS</a>
                </li>
                <li><a href="{{ route('reviews.index') }}" class="{{ request()->routeIs('reviews.*') ? "text-orange-400 underline" : '' }} mr-2 hover:text-blue-400">REVIEWS</a>
                </li>
            </ul>
        </div>

        @guest

            <div class="">
                <ul  class="flex space-x-2 text-lg">
                    <li><a href="{{ route('cuenta.registrarse') }}" class="{{ request()->routeIs('cuenta.registrarse') ? "text-orange-400 underline" : '' }} mr-2 hover:text-blue-400" >REGISTRARSE</a></li>

                    <li><a href="{{ route('cuenta.ingresar') }}" class="{{ request()->routeIs('cuenta.ingresar') ? "text-orange-400 underline" : '' }} hover:text-blue-400">INGRESAR</a></li>
                </ul>
            </div>

        @else

        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="flex items-center space-x-4">
                <span class="text-xl">{{ Auth::user()->name }}</span>
                <img src="{{ asset('storage/images/' . Auth::user()->imgUsuario) }}" alt="{{ Auth::user()->name }}" class="w-14 h-14 rounded-full">
            </button>

            <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-20">
                <!-- Opciones comunes a todos los roles -->
                <a href="{{ route('cuenta.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Configurar Perfil</a>

                <!-- Opciones para el rol de lector -->
                @if(Auth::user()->rol == 'lector')
                    <form method="GET" action="{{ route('cuenta.logout') }}" class="block">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-500 hover:bg-gray-100">Cerrar Sesión</button>
                    </form>
                @endif

                <!-- Opciones para el rol de autor -->
                @if(Auth::user()->rol == 'autor')
                    <a href="{{ route('reviews.create') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Crear Review</a>
                    <a href="{{ route('noticias.create') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Crear Noticia</a>
                    <a href="{{ route('cuenta.reviews') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Mis Reviews</a>
                    <a href="{{ route('cuenta.noticias') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Mis Noticias</a>
                    <form method="GET" action="{{ route('cuenta.logout') }}" class="block">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-500 hover:bg-gray-100">Cerrar Sesión</button>
                    </form>
                @endif

                <!-- Opciones para el rol de administrador -->
                @if(Auth::user()->rol == 'administrador')
                    <a href="{{ route('reviews.create') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Crear Review</a>
                    <a href="{{ route('noticias.create') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Crear Noticia</a>
                    <a href="{{ route('cuenta.reviews') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Mis Reviews</a>
                    <a href="{{ route('cuenta.noticias') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Mis Noticias</a>
                    <a href="{{ route('cuenta.users') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Administrar Usuarios</a>
                    <form method="GET" action="{{ route('cuenta.logout') }}" class="block">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-500 hover:bg-gray-100">Cerrar Sesión</button>
                    </form>
                @endif
            </div>
        </div>

        @endguest

    </nav>

</header>
