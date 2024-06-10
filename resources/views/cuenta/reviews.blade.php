@extends('layouts.plantilla')

@section('title', 'Mis reviews')

@section('content')

<div>
    <h1 class="text-3xl font-bold mb-6 text-slate-900">MIS REVIEWS</h1>

    @if($reviews->isEmpty())
        <div class="flex items-center justify-center w-full mx-auto mt-6">
            <div class="bg-white rounded-lg shadow-md w-full p-6 text-center">
                <h3 class="text-2xl font-semibold mb-4">No tienes reviews</h3>
                <p class="text-gray-600">Aún no has creado ninguna review. ¡Empieza ahora!</p>
            </div>
        </div>
    @else
        <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
            @foreach($reviews as $review)
            <a href="{{ route('reviews.edit', $review) }}">
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition-transform duration-300 hover:scale-105 pt-3">
                    <div class="w-fit h-60 flex items-center justify-center mx-auto bg-gray-200">
                        <img class="w-full h-full object-cover" src="{{ asset('storage/images/' . $review->imgCard) }}" alt="{{ $review->nombreJuego }}">
                    </div>
                    <div class="p-6">
                        <h2 class="text-xl font-semibold mb-2">{{ $review->nombreJuego }}</h2>
                        <p class="text-gray-700">{{ $review->resumenReview }}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    @endif

</div>

@endsection()
