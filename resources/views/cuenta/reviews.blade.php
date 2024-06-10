@extends('layouts.plantilla')

@section('title', 'Mis reviews')

@section('content')

<div>
    <h1 class="text-3xl font-bold mb-6 text-slate-900">MIS REVIEWS</h1>
    <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
        @forelse($reviews as $review)
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
        @empty

        <div class="bg-white rounded-lg shadow-md overflow-hidden w-3/4 mx-auto mt-6">
            <h3 class="text-2xl font-semibold mb-4">No tienes reviews</h3>
        </div>

        @endforelse

    </div>
</div>

@endsection()
