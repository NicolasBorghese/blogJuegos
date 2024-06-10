@extends('layouts.plantilla')

@section('title', 'Editar Noticia')

@section('content')

<div class="bg-white rounded-lg shadow-md p-10 overflow-hidden w-3/4 mx-auto">
    <h1 class="text-3xl font-bold mb-6 text-slate-900">Editar Noticia</h1>

    <form action="{{ route('noticias.update', $noticia) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Título de la Noticia -->
        <div class="mb-4">
            <label for="tituloNoticia" class="block text-gray-700">Título de la Noticia</label>
            <input type="text" name="tituloNoticia" id="tituloNoticia" value="{{ $noticia->tituloNoticia }}" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-500 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @error('tituloNoticia')
                <span class="text-red-600 text-sm mt-1">*{{ $message }}</span>
            @enderror
        </div>

        <!-- Resumen de la Noticia -->
        <div class="mb-4">
            <label for="resumenNoticia" class="block text-gray-700">Resumen de la Noticia</label>
            <input type="text" name="resumenNoticia" id="resumenNoticia" value="{{ $noticia->resumenNoticia }}" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-500 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @error('resumenNoticia')
                <span class="text-red-600 text-sm mt-1">*{{ $message }}</span>
            @enderror
        </div>

        <!-- Contenido de la Noticia -->
        <div class="mb-4">
            <label for="contenidoNoticia" class="block text-gray-700">Contenido de la Noticia</label>
            <textarea name="contenidoNoticia" id="contenidoNoticia" rows="5" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-500 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ $noticia->contenidoNoticia }}</textarea>
            @error('contenidoNoticia')
                <span class="text-red-600 text-sm mt-1">*{{ $message }}</span>
            @enderror
        </div>

        <!-- Imagen Card -->
        <div class="mb-4">
            <label for="imgCard" class="block text-gray-700">Imagen Card</label>
            <input type="file" name="imgCard" id="imgCard" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100" accept="image/*">
            @error('imgCard')
                <span class="text-red-600 text-sm mt-1">*{{ $message }}</span>
            @enderror
        </div>

        <!-- Imagen Portada -->
        <div class="mb-4">
            <label for="imgPortada" class="block text-gray-700">Imagen Portada</label>
            <input type="file" name="imgPortada" id="imgPortada" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100" accept="image/*">
            @error('imgPortada')
                <span class="text-red-600 text-sm mt-1">*{{ $message }}</span>
            @enderror
        </div>

        <!-- Botón de Envío -->
        <div class="flex justify-end">
            <button type="submit" class="px-6 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Guardar Cambios</button>
        </div>
    </form>
</div>

@endsection
