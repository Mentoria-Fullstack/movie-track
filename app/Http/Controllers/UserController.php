<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function show(string $id)
    {
        return User::findOrFail($id);

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);


        User::create($request->all());

        return response()->json([
            'message' => 'criado com sucesso!'
        ], 201);

    }

    public function showUserMovies(string $userId)
    {
        return User::findOrFail($userId)->movies;
    }

    public function showUserTvShows(string $userId)
    {
        return User::findOrFail($userId)->tvShows;
    }

    //TODO: TRATAR DUPLICAÇÃO DE INSERÇÃO OU SEJA, NÃO PERMITIR UM FILME OU TVSHOW SER SALVO MAIS DE 1 VEZ
    public function addMovieToFavorite(Request $request)
    {
        $request->validate([
            'userId' => 'required|exists:users,id',
            'movieId' => 'required|exists:movies,id'
        ]);

        User::find($request->userId)->movies()->attach($request->movieId);

        return response()->json([
            'message' => "filme adicionado com sucesso!"
        ]);
    }

}
