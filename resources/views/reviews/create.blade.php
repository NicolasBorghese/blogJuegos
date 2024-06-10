@extends('layouts.plantilla')

@section('title', 'Crear Review')

@section('content')

<div class="bg-white rounded-lg shadow-md p-10 overflow-hidden w-3/4 mx-auto">
    <h1 class="text-3xl font-bold mb-6 text-slate-900">Crear Review</h1>

    <form action="{{ route('reviews.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="nombreJuego" class="block text-gray-700">Nombre del juego</label>
            <input type="text" name="nombreJuego" id="nombreJuego" value="{{ old('nombreJuego') }}" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-500 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @error('nombreJuego')
                <span class="text-red-600 text-sm mt-1">*{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="resumenReview" class="block text-gray-700">Resumen de la Review</label>
            <input type="text" name="resumenReview" id="resumenReview" value="{{ old('resumenReview') }}" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-500 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @error('resumenReview')
                <span class="text-red-600 text-sm mt-1">*{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="contenidoReview" class="block text-gray-700">Contenido de la Review</label>
            <textarea name="contenidoReview" id="contenidoReview" rows="5" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-500 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ old('contenidoReview') }}</textarea>
            @error('contenidoReview')
                <span class="text-red-600 text-sm mt-1">*{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="puntajeJuego" class="block text-gray-700">Puntaje del Juego</label>
            <input type="number" name="puntajeJuego" id="puntajeJuego" value="{{ old('puntajeJuego') }}" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-500 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @error('puntajeJuego')
                <span class="text-red-600 text-sm mt-1">*{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="generoJuego" class="block text-gray-700">Género del Juego</label>
            <input type="text" name="generoJuego" id="generoJuego" value="{{ old('generoJuego') }}" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-500 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @error('generoJuego')
                <span class="text-red-600 text-sm mt-1">*{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="imgCard" class="block text-gray-700">Imagen Card</label>
            <input type="file" name="imgCard" id="imgCard" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100" accept="image/*">
            @error('imgCard')
                <span class="text-red-600 text-sm mt-1">*{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="imgPortada" class="block text-gray-700">Imagen Portada</label>
            <input type="file" name="imgPortada" id="imgPortada" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100" accept="image/*">
            @error('imgPortada')
                <span class="text-red-600 text-sm mt-1">*{{ $message }}</span>
            @enderror
        </div>

        <div class="flex justify-end">
            <button type="submit" class="px-6 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Crear Review</button>
        </div>
    </form>
</div>

@endsection
