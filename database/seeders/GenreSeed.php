<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'genre_code'=>'RPG',
            'genre_name'=>'Role Playing Game',
            'develop'=>'Game Maker',
            'description'=>'MMORPG game Online Based',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now() 
        ]);
        DB::table('genres')->insert([
            'genre_code'=>'FPS',
            'genre_name'=>'First Person Shooter',
            'develop'=>'Game Maker',
            'description'=>'Shooting Game on Onlines Platform',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now() 
        ]);
    }
}
