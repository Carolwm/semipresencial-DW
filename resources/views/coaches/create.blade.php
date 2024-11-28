@extends('layouts.base')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold text-white mb-6">Criar Coach</h1>

    <form action="{{ url('coaches') }}" method="POST" enctype="multipart/form-data" class="bg-gray-800 p-6 rounded-lg shadow-lg">
        @csrf

        <!-- Nome do Coach -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Nome</label>
            <input type="text" name="name" id="name" placeholder="Digite o nome do coach" required
                   class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Upload de Imagem -->
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-300 mb-2">Imagem</label>
            <input type="file" name="image" id="image"
                   class="block w-full text-sm text-gray-300 bg-gray-700 border border-gray-600 rounded-lg cursor-pointer focus:outline-none">
        </div>

        <!-- Botão Criar -->
        <div class="flex justify-end">
            <button type="submit"
                    class="text-white bg-green-500 hover:bg-green-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                Criar Coach
            </button>
        </div>
    </form>
</div>
@endsection
