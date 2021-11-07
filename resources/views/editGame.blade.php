@extends('mainlayout')

@section('title', 'Update')

<div class="container pt-5 text-light">
@section('pagetitle', 'Update')

@section('main_content')
        <div class="row">
            <div class="col">
                <form action="{{ route('games.update', $game->id) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                    <label for="game">Name : </label>
                    <input type="text" class="form-control" id="game" name="game" value="{{ $game->game }}" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="genree">Genre : </label>
                    <select name="genree" class="custom-select">
                        @foreach ($genres as $gen)
                        @if ($gen['genre_code'] == $game['genree'])
                        <option value ="{{ $gen['genre_code'] }}"selected>{{ $gen['genre_name']}}</option>
                        @else
                        <option value ="{{ $gen['genre_code'] }}">{{ $gen['genre_name']}}</option>
                        @endif
                        @endforeach
                </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="description">Description : </label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ $game->description }}" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="developer">Developer : </label>
                    <input type="text" class="form-control" id="developer" name="developer" value="{{ $game->developer }}" required>
                </div>
                <br>
                    <button type="submit" class="btn btn-secondary">Update</button>
                    <a href="{{ URL::previous() }}" class="btn btn-danger"> <i class="fas fa-arrow-left"></i>Return</a>
                </form>
            </div>
        </div>
    </div>

@endsection