<?php
 
namespace App\Policies;
 
use App\Models\Pokemon;
use App\Models\Post;
use App\Models\User;
 
class PokemonPolicy
{
    public function create(?User $user): bool
    {
        return !is_null($user); //vai permitir que edite e crie pokemons so se ele estiver conectado
    }
    public function delete(?User $user): bool
    {
        return !is_null($user); //vai permitir que edite e crie pokemons so se ele estiver conectado
    }

    public function update(?User $user): bool
    {
        return !is_null($user); //vai permitir que edite e crie pokemons so se ele estiver conectado
    }
}