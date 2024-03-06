<?php

namespace App\Http\Controllers;

use App\Models\MediaGenre;
use Illuminate\Http\Request;

class MediaGenreController extends Controller
{
    public function index(){
        return response()->json(MediaGenre::all());
    }
}
