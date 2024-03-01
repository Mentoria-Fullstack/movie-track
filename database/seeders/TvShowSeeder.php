<?php

namespace Database\Seeders;

use App\Models\Media;
use App\Models\TvShow;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TvShowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tvshow = TvShow::factory()->create();

        $tvshow->media()->create(Media::factory()->make()->toArray());
    }
}
