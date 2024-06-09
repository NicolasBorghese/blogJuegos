@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')

<div>
    <h1 class="text-3xl font-bold mb-6 text-slate-900">ÚLTIMAS NOTICIAS</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($noticias as $noticia)
            <div class="col-span-1 md:col-span-2 lg:col-span-2 bg-white rounded-lg shadow-md overflow-hidden transform transition-transform duration-300 hover:scale-105">
                <img class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('storage/images/'. $noticia->imgCard) }}" alt="{{ $noticia->tituloNoticia }}">
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-2">{{ $noticia->tituloNoticia }}</h2>
                    <p class="text-gray-700">{{ $noticia->resumenNoticia }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <h1 class="text-3xl font-bold mt-12 mb-6 text-slate-900">ÚLTIMAS REVIEWS</h1>
    <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
        @foreach($reviews as $review)
            <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition-transform duration-300 hover:scale-105 pt-3">
                <div class="w-fit h-60 flex items-center justify-center mx-auto bg-gray-200">
                    <img class="w-full h-full object-cover" src="{{ asset('storage/images/' . $review->imgCard) }}" alt="{{ $review->nombreJuego }}">
                </div>
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-2">{{ $review->nombreJuego }}</h2>
                    <p class="text-gray-700">{{ $review->resumenReview }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection()
