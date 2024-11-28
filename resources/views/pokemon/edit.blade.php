@extends('layouts.base')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold text-white mb-4">Editar Pokémon</h1>
    
    <form action="{{ url('pokemon/'.$pokemon->id) }}" method="POST" enctype="multipart/form-data" class="bg-gray-800 p-6 rounded-lg shadow-lg">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name">Nome do Pokémon:</label>
            <input type="text" id="name" name="name" value="{{ $pokemon->name }}" required>
        </div>

        <div class="mb-4">
            <label for="type">Tipo:</label>
            <input type="text" id="type" name="type" value="{{ $pokemon->type }}" required>
        </div>

        <div class="mb-4">
            <label for="power">Poder:</label>
            <input type="number" id="power" name="power" value="{{ $pokemon->power }}" required>
        </div>

        <div class="mb-4">
            <label for="coach_id">Coach:</label>

            <select name="coach_id" id="coach_id">
                <option value="">selecione um coach:</option>
                @foreach ($coaches as $coach)
                    @if($coach-> id === $pokemon->coach->id)
                        <option value="{{ $coach->id }}" selected>{{ $coach->name }}</option>
                    @else
                        <option value="{{ $coach->id }}">{{ $coach->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label>Imagem Atual:</label>
            <img src="{{ asset($pokemon->image) }}" alt="{{ $pokemon->name }}">
            
            <label for="image" class="block text-white font-medium">Nova Imagem (Opcional):</label>
            <input type="file" name="image" id="image">
        </div>

       

        <button type="submit">
            Salvar Alterações
        </button>
    </form>
</div>
@endsection
