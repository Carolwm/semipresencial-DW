@extends('layouts.base')

@section('content')

@can('create', App\Models\Pokemon::class)
    <div>
        <h1">Lista de Pokémons</h1>
        <a href="{{ url('pokemon/create') }}" class="">
            Criar Pokémon
        </a>
    </div>
@endcan

<div class="container mx-auto p-4">
    

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($pokemon as $poke)
        <div>
            <div class="mb-4">
                <img src="{{ asset($poke->image) }}" alt="{{ $poke->name }}" class="">
            </div>
            <h3>{{ $poke->name }}</h3>
            <p>Tipo: {{ $poke->type }}</p>
            <p>Poder: {{ $poke->power }}</p>
            <p>Treinador: {{ $poke->coach->name }}</p>

            <div>
                <a href="{{ url('pokemon/'.$poke->id.'/edit') }}">
                    Editar
                </a>

                <form action="{{ url('pokemon/'.$poke->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">
                        Excluir
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
