<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Movie::with(['genres'])->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|unique:movies|max:255',
            'description' => 'required',
            'cover' => 'required|url',
            'release_date' => 'required',
            'duration' => 'required|integer'
        ]);


        Movie::create($request->all());

        return response()->json([
            'message' => 'criado com sucesso!'
        ], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Movie::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Movie::findOrFail($id)->update($request->all());

        return response()->json([
            'message' => 'atualizado com sucesso'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Movie::find($id)->delete();

        return response()->json([
            'message' => "filme com id $id deletado com sucesso"
        ]);
    }
}
