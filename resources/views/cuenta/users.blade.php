@extends('layouts.plantilla')

@section('title', 'Lista de Usuarios')

@section('content')

<div class="container mx-auto py-6">
    <h1 class="text-3xl font-bold mb-6 text-slate-900">Lista de Usuarios</h1>
    <div class="bg-white rounded-lg shadow-md overflow-hidden w-full mx-auto p-6 space-y-4">
        @foreach($users as $user)
            <form action="{{ route('cuenta.update', $user->id) }}" method="POST" class="bg-gray-100 p-4 rounded-md shadow-sm flex items-center space-x-4">
                @csrf
                @method('PUT')

                <div class="w-20 h-20 flex-shrink-0 mr-4">
                    @if ($user->imgUsuario)
                        <img src="{{ asset('storage/images/' . $user->imgUsuario) }}" alt="Foto de {{ $user->name }}" class="w-full h-full object-cover rounded-full">
                    @else
                        <img src="https://via.placeholder.com/80" alt="Foto de {{ $user->name }}" class="w-full h-full object-cover rounded-full">
                    @endif
                </div>

                <div class="flex-grow">
                    <p class="text-gray-700 font-semibold">ID: {{ $user->id }}</p>
                    <p class="text-gray-700">Nombre: {{ $user->name }}</p>
                    <p class="text-gray-700">Email: {{ $user->email }}</p>

                    <div class="mt-2">
                        <label class="block text-gray-700">Rol:</label>
                        <div class="flex items-center">
                            <label class="mr-2">
                                <input type="radio" name="rol" value="lector" {{ $user->rol == 'lector' ? 'checked' : '' }}>
                                Lector
                            </label>
                            <label class="mr-2">
                                <input type="radio" name="rol" value="autor" {{ $user->rol == 'autor' ? 'checked' : '' }}>
                                Autor
                            </label>
                            <label class="mr-2">
                                <input type="radio" name="rol" value="administrador" {{ $user->rol == 'administrador' ? 'checked' : '' }}>
                                Administrador
                            </label>
                        </div>
                    </div>

                    <div class="mt-2 flex">
                        <label class="block text-gray-700 mr-2">Habilitado:</label>
                        <input type="checkbox" name="habilitado" {{ $user->habilitado ? 'checked' : '' }}>
                    </div>
                </div>

                <div>
                    <button type="submit" class="bg-indigo-600 text-white py-2 px-4 rounded-md shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
                        Guardar Cambios
                    </button>
                </div>
            </form>
        @endforeach
    </div>
</div>

@endsection
