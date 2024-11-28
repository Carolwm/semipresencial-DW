@extends('layouts.base')

@section('content')
<div class="container mx-auto p-4">
    <h1>Criar Pokémon</h1>
    
    <form action="{{ url('pokemon') }}" method="POST" enctype="multipart/form-data" class="bg-gray-800 p-6 rounded-lg shadow-lg">
        @csrf
        <div class="mb-4">
            <label for="name">Nome do Pokémon:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="mb-4">
            <label for="type">Tipo:</label>
            <input type="text" id="type" name="type" required>
        </div>

        <div class="mb-4">
            <label for="power">Poder:</label>
            <input type="number" id="power" name="power" required>
        </div>

        <div class="mb-4">
            <label for="image">Imagem:</label>
            <input type="file" name="image" id="image">
        </div>

        <div class="mb-4">
            <label for="coach_id">Coach:</label>
            <select name="coach_id" id="coach_id">
                <option value="">selecione um coach:</option>
                @foreach ($coaches as $coach)
                    <option value="{{ $coach->id }}">{{ $coach->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">
            Criar Pokémon
        </button>
    </form>
</div>
@endsection
