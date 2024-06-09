<header>
    <div class="flex items-center justify-center h-48 bg-gradient-to-r from-blue-950 to-rose-950">
        <a href="{{ route('home') }}"><img src="{{ asset('images/logo_blogJuegos.png') }}" alt="blogJuegos" class="w-50"></a>
    </div>

    <nav class="flex w-full justify-between bg-slate-900 px-10 py-6 text-white font-bold">
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

        <div class="">
            <ul  class="flex space-x-2 text-lg">
                <li><a href="" class="mr-2 hover:text-blue-400" >REGISTRARSE</a></li>
                <li><a href="" class="hover:text-blue-400">INGRESAR</a></li>
            </ul>
        </div>
    </nav>

</header>
