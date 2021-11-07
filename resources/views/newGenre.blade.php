@extends('mainlayout')

@section('title', 'Genre')


@section('pagetitle', 'Add')

@section('main_content')
<div class="container pt-5 text-light">
    <div class="row">
        <div class="col">
            <form action="{{ route('genres.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="genre_code">Code : </label>
                    <input type="text" class="form-control" id="genre_code" name="genre_code" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="genre_name">Genre : </label>
                    <input type="text" class="form-control" id="genre_name" name="genre_name" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="description">Description : </label>
                    <input type="text" class="form-control" id="description" name="description" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="develop">Developer : </label>
                    <input type="text" class="form-control" id="develop" name="develop" required>
                </div>
                <br>
                <button type="submit" class="btn btn-secondary">Add New Genre</button>
                <a href="{{ URL::previous() }}" class="btn btn-danger"> <i class="fas fa-arrow-left"></i>Return</a>
            </form>
        </div>
    </div>
@endsection