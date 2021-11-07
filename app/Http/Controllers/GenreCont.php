<?php

namespace App\Http\Controllers;
use App\Models\Genre;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\DB;

class GenreCont extends Controller
{
    public function index()
    {
        $active_welcome = "";
        $active_games = "active";
        $active_genres = "";

        $genre = Genre::all();

        return view('genre', [
            "title" => "Genres",
            "pagetitle" => "Genre"],
            compact('active_welcome', 'active_games', 'active_genres', 'genre'));
    }

    public function create()
    {
        return view('newGenre', ['title' => 'Add new Genre']);
    }

    public function store(Request $request)
    {
        $genre_code = Str::upper(Str::substr($request->genre_name, 0, 3));

        Genre::create([
            'genre_code' => $request->genre_code,
            'genre_name' => $request->genre_name,
            'develop' => $request->develop, 
            'description' => $request->description
        ]);
        return redirect(route('genres.index'));
    }

    public function show($genre_code)
    {
        $genre = Genre::where('genre_code', $genre_code)
        ->orderBy('genre_code')
        ->first();
        $title = "Genres";
        return view('showgenre', compact('genre', 'title'));
    }

    public function edit($genre_code)
    {
        $genre =Genre::where('genre_code', $genre_code)
        ->first();
        $title = "Genres";
        return view('editgenre', compact('genre', 'title'));
    }

    public function update(Request $request, $id)
    {
        $genre_code = Str::upper(Str::substr($request->genre_code, 0, 3));
        $genre=[
            'genre_code' => $request->genre_code,
            'genre_name' => $request->genre_name,
            'develop' => $request->develop, 
            'description' => $request->description
        ];
        Genre::where('genre_code', $id)->update($genre);
        return redirect(route('genres.index'));
    }

    public function destroy($genre_code)
    {
        $genre = Genre::where('genre_code', $genre_code);
        $genre ->delete();
        return redirect(route('genres.index'));
    }

}