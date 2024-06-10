@extends('layouts.plantilla')

@section('title', 'Mis noticias')

@section('content')

<div>
    <h1 class="text-3xl font-bold mb-6 text-slate-900">MIS NOTICIAS</h1>

    @if($noticias->isEmpty())
        <div class="flex items-center justify-center w-full mx-auto mt-6">
            <div class="bg-white rounded-lg shadow-md w-full p-6 text-center">
                <h3 class="text-2xl font-semibold mb-4">No tienes noticias</h3>
                <p class="text-gray-600">Aún no has creado ninguna noticia. ¡Empieza ahora!</p>
            </div>
        </div>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
            @foreach($noticias as $noticia)
            <a href="{{ route('noticias.show', $noticia) }}">
                <div class="col-span-1 bg-white rounded-lg shadow-md overflow-hidden transform transition-transform duration-300 hover:scale-105 h-full">
                    <img class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('storage/images/'. $noticia->imgCard) }}" alt="{{ $noticia->tituloNoticia }}">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold mb-2">{{ $noticia->tituloNoticia }}</h2>
                        <p class="text-gray-700">{{ $noticia->resumenNoticia }}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    @endif

</div>

@endsection()
