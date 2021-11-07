<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            'genree'=>'RPG',
            'game'=>'Ragnarok X',
            'developer'=>'GRAVITY Co.',
            'description'=>'MMORPG game Online Based',
            'Code'=>'RPG',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now() 
        ]);
        DB::table('games')->insert([
            'genree'=>'FPS',
            'game'=>'Valorant',
            'developer'=>'Riot Games',
            'description'=>'Shooting Game on Onlines Platform',
            'Code'=>'FPS',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now() 
        ]);
        // DB::table('games')->insert([
        //     'genree'=>'Horror',
        //     'game'=>'Devour',
        //     'developer'=>'Straight Back Games',
        //     'description'=>'Game that asked us to Complete the trial',
        //     'created_at' => \Carbon\Carbon::now(),
        //     'updated_at' => \Carbon\Carbon::now() 
        // ]);
    }
}
