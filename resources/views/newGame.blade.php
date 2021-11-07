@extends('mainlayout')

@section('title', 'Game')

<div class="container pt-5 text-light">
@section('pagetitle', 'Add')

@section('main_content')

    <div class="row">
        <div class="col">
            <form action="{{ route('games.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="game">Name : </label>
                    <input type="text" class="form-control" id="game" name="game" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="genree">Genre : </label>
                    <select name="genree" class="custom-select">
                        @foreach ($genres as $gen)
                            <option value ="{{ $gen['genre_code'] }}">{{ $gen['genre_name']}}</option>
                        @endforeach
                </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="description">Description : </label>
                    <input type="text" class="form-control" id="description" name="description" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="developer">Developer : </label>
                    <input type="text" class="form-control" id="developer" name="developer" required>
                </div>
                <br>
                <button type="submit" class="btn btn-secondary">Create New</button>
                <a href="{{ URL::previous() }}" class="btn btn-danger"> <i class="fas fa-arrow-left"></i>Return</a>
            </form>
        </div>
    </div>
@endsection