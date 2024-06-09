@extends('layouts.plantilla')

@section('title', 'Review {{ $noticia->tituloNoticia }}')

@section('content')

    <div class="bg-white rounded-lg shadow-md overflow-hidden w-3/4 mx-auto">
        <img class="w-full object-cover" src="{{ asset('storage/images/'. $noticia->imgPortada) }}" alt="{{ $noticia->tituloNoticia }}">
        <div class="p-6">
            <h2 class="text-3xl font-semibold mb-2">{{ $noticia->tituloNoticia }}</h2>
            <p class="text-gray-700 mb-4">{{ $noticia->resumenNoticia }}</p>
            <p class="text-gray-700">{{ $noticia->contenidoNoticia }}</p>
        </div>
    </div>

@endsection()
