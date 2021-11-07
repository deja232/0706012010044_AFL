<?php

namespace App\Http\Controllers;
use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\DB;

class GameCont extends Controller
{
    public function index()
    {
        $active_welcome = "";
        $active_games = "active";
        $active_genres = "";

        $game = Game::all();

        return view('game', [
            "title" => "Game",
            "pagetitle" => "Library"],
            compact('active_welcome', 'active_games', 'active_genres', 'game'));
    }

    public function create()
    {      
        $title = "Add new Game";
        $genres = Genre::all();
        return view('newGame', compact('genres', 'title'));
    }

    public function store(Request $request)
    {
        $genre = Str::upper(Str::substr($request->game, 0, 3));

        Game::create([
            'genree' => $request->genree,
            'game' => $request->game,
            'developer' => $request->developer,
            'description' => $request->description,
            'Code'=>$request->genree
        ]);
        return redirect(route('games.index'));
    }

    public function show($genre)
    {
        $game = Game::where('genree', $genre)
        ->orderBy('game')
        ->first();
        $title = "Game";
        return view('showgame', compact('game', 'title'));
    }

    public function edit($genre)
    {
        $game = Game::findOrFail($genre);
        $genres = Genre::all();
        $title = "Game";
        return view('editGame', compact('game', 'title','genres'));
    }

    public function update(Request $request, $id)
    {
        $genre = Str::upper(Str::substr($request->game, 0, 3));
        $game = Game::findOrFail($id);
        $game->update([
            'genree' => $genre,
            'game' => $request->game,
            'developer' => $request->developer,
            'description' => $request->description
        ]);
        return redirect(route('games.index'));
    }

    public function destroy($id)
    {
        $games = Game::findOrFail($id);
        $games ->delete();
        return redirect(route('games.index'));

    }

}