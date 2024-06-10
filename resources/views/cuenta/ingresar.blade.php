@extends('layouts.plantilla')

@section('title', 'Ingresar')

@section('content')

<div class="bg-white rounded-lg shadow-md overflow-hidden w-1/2 mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4 text-slate-900">INGRESAR</h1>

    <form action="{{ route('cuenta.login') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block text-gray-700">Email:</label>
            <input type="email" name="email" value="{{ old('email') }}" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-500 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @error('email')
                <span class="text-red-600 text-sm mt-1">*{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label class="block text-gray-700">Contraseña:</label>
            <input type="password" name="password" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-500 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @error('password')
                <span class="text-red-600 text-sm mt-1">*{{ $message }}</span>
            @enderror
        </div>

        <div>
            <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
                INGRESAR
            </button>
        </div>
    </form>
</div>

@endsection()
