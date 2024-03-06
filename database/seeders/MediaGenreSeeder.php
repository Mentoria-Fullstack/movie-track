<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Media;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $medias = Media::all();
        $genres = Genre::all();

        foreach($medias as $media){
            $randomGenre = $genres->random();
            $media->genres()->attach($randomGenre->id);
        }
    }
}
