<?php

namespace Database\Seeders;

use App\Models\Media;
use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <=10; $i++){
            $movie = Movie::factory()->create();
            $movie->media()->create(Media::factory()->make()->toArray());
        }
    }
}
