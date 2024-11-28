@extends('layouts.base')

@section('content')
<div class="container mx-auto p-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-white">Lista de Coaches</h1>
        <a href="{{ url('coaches/create') }}">
            Criar Coach
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($coaches as $coach)
        <div class="bg-gray-800 p-4 rounded-lg shadow-lg">
            <div class="mb-4">
                <img src="{{ asset($coach->image) }}" alt="{{ $coach->name }}" class="h-10 <w-10></w-10> object-cover mx-auto rounded-lg">
            </div>
            <h3 class="text-xl font-bold text-white text-center">{{ $coach->name }}</h3>

            <div class="flex justify-between items-center mt-4">
                <a href="{{ url('coaches/'.$coach->id.'/edit') }}" 
                   class="text-white bg-blue-500 hover:bg-blue-600 font-medium rounded-lg text-sm px-4 py-2 text-center">
                    Editar
                </a>

                <form action="{{ url('coaches/'.$coach->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                            class="text-white bg-red-500 hover:bg-red-600 font-medium rounded-lg text-sm px-4 py-2 text-center">
                        Excluir
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
