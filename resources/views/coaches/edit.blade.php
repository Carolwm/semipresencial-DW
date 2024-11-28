@extends('layouts.base')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold text-white mb-6">Editar Coach</h1>

    <form action="{{ url('coaches/'.$coach->id) }}" method="POST" enctype="multipart/form-data" class="bg-gray-800 p-6 rounded-lg shadow-lg">
        @csrf
        @method('PUT')

        <!-- Nome do Coach -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Nome</label>
            <input type="text" name="name" id="name" value="{{ $coach->name }}" required
                   class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Imagem do Coach -->
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-300 mb-2">Imagem Atual</label>
            <div class="mb-4">
                <img src="{{ asset($coach->image) }}" alt="Imagem do Coach" class="h-32 w-32 object-cover rounded-lg">
            </div>
            <label for="image" class="block text-sm font-medium text-gray-300 mb-2">Atualizar Imagem</label>
            <input type="file" name="image" id="image"
                   class="block w-full text-sm text-gray-300 bg-gray-700 border border-gray-600 rounded-lg cursor-pointer focus:outline-none">
        </div>

        <!-- Botão Atualizar -->
        <div class="flex justify-end">
            <button type="submit"
                    class="text-white bg-blue-500 hover:bg-blue-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                Atualizar Coach
            </button>
        </div>
    </form>
</div>
@endsection
