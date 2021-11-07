@extends('mainlayout')

@section('title','Library')
@section('pagetitle','Details')

@section('main_content')
    <div class="mt-4 p-5 blkg">
    <a href="{{ URL::previous() }}" class="btn btn-warning"> <i class="fas fa-arrow-left"></i>Return</a>
        <h2>{{$game['title']}}</h2>
        <h5>Name : {{$game['game']}}</h5>
        <h5>Genre: {{$game['genree']}}</h5>
</div>
@endsection