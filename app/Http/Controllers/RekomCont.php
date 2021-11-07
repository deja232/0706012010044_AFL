<?php

namespace App\Http\Controllers;
use App\Models\Genre;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\DB;

class RekomCont extends Controller
{
    public function about(){
        return view('contact',['title' => 'About','active_contact' => 'active']);
    }

    public function index(){
        $randomrecom = Game::all()->shuffle()->take(5);
        return view('recommendation', compact('randomrecom'),['title'=>'Recommendation']);
    }
}