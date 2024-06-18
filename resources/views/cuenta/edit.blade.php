@extends('layouts.plantilla')

@section('title', 'Configurar cuenta')

@section('content')

<div class="bg-white rounded-lg shadow-md overflow-hidden w-1/2 mx-auto">
    <div class="bg-gradient-to-r from-blue-950 to-rose-950 p-6">
        <h1 class="text-2xl font-bold text-orange-400 text-center">CONFIGURAR PERFIL</h1>
    </div>

    <div class="p-6">
        @if ($user->imgUsuario)
            <div class="flex justify-center mb-6">
                <img src="{{ asset('storage/images/' . $user->imgUsuario) }}" alt="Imagen de perfil actual" class="w-32 h-32 rounded-full object-cover">
            </div>
        @endif

        <form action="{{ route('cuenta.update', $user->id) }}" method="POST" class="space-y-4" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-gray-700">Nombre:</label>
                <input type="text" name="name" value="{{ old('name', $user->name) }}" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-500 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('name')
                    <span class="text-red-600 text-sm mt-1">*{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label class="block text-gray-700">Email:</label>
                <input type="email" name="email" value="{{ old('email', $user->email) }}" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-500 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('email')
                    <span class="text-red-600 text-sm mt-1">*{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label class="block text-gray-700">Nueva contraseña:</label>
                <input type="password" name="password" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-500 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('password')
                    <span class="text-red-600 text-sm mt-1">*{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label class="block text-gray-700">Cambiar imagen de perfil:</label>
                <input type="file" name="imgUsuario" class="mt-1 block w-full text-gray-700">
                @error('imgUsuario')
                    <span class="text-red-600 text-sm mt-1">*{{ $message }}</span>
                @enderror
            </div>

            <div>
                <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
                    GUARDAR CAMBIOS
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
