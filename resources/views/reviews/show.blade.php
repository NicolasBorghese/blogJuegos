@extends('layouts.plantilla')

@section('title', $review->nombreJuego)

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

    <div class="bg-white rounded-lg shadow-md overflow-hidden w-3/4 mx-auto mt-6">
        <div class="p-6">
            <h3 class="text-2xl font-semibold mb-4">Comentarios</h3>
            @forelse($comentarios as $comentario)
                <div class="border-b border-gray-200 py-4">
                    <div class="flex items-center mb-2">
                        <img class="w-14 h-14 rounded-full" src="{{ asset('storage/images/' . $comentario->user->imgUsuario) }}" alt="{{ $comentario->user->name }}">
                        <span class="ml-4 font-semibold">{{ $comentario->user->name }}</span>
                    </div>
                    <p class="text-gray-700">{{ $comentario->contenidoComentario }}</p>
                </div>
            @empty
                <p class="text-gray-700">No hay comentarios. ¡Sé el primero en comentar!</p>
            @endforelse
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-md overflow-hidden w-3/4 mx-auto mt-6">
        <div class="p-6">
            <h3 class="text-2xl font-semibold mb-4">Agregar Comentario</h3>
            <form action="{{ route('comentarios.store') }}" method="POST">
                @csrf
                <input type="hidden" name="idPost" value="{{ $review->idPost }}">
                <div class="mb-4">
                    <label for="contenidoComentario" class="block text-gray-700">Comentario</label>
                    <textarea name="contenidoComentario" id="contenidoComentario" rows="3" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-500 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="px-6 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Enviar Comentario</button>
                </div>
            </form>
        </div>
    </div>

@endsection()
