@extends('layouts.plantilla')

@section('title', 'Review {{ $review->nombreJuego }}')

@section('content')

    <div class="bg-white rounded-lg shadow-md overflow-hidden w-3/4 mx-auto">
        <img class="w-full object-cover" src="{{ asset('storage/images/' . $review->imgPortada) }}" alt="{{ $review->nombreJuego }}">
        <div class="p-6">
            <h2 class="text-3xl font-semibold mb-2">{{ $review->nombreJuego }}</h2>
            <p class="text-gray-700 mb-4">{{ $review->resumenReview }}</p>
            <p class="text-gray-700 mb-4"><span class="font-bold">Puntaje:</span> {{ $review->puntajeJuego }}</p>
            <p class="text-gray-700 mb-4"><span class="font-bold">Género:</span> {{ $review->generoJuego }}</p>
            <p class="text-gray-700">{{ $review->contenidoReview }}</p>
        </div>
    </div>

@endsection()
