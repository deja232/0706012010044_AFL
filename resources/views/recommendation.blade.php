@extends('mainlayout')

@section('title','Recommendation')

@section('main_content')
<h1 class="title">
    Recommendation
</h1>
<div id="rekomen" class="carousel slide mt-4" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach ($randomrecom -> chunk(5) as $data)
        @if($loop ->first)
        <button type="button" data-bs-target="#rekomen" data-bs-slide-to=" {{$loop->index}} " class="active"></button>
        @else
        <button type="button" data-bs-target="#rekomen" data-bs-slide-to=" {{$loop->index}} "></button>
        @endif
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach ($randomrecom -> chunk(5) as $data)
        @if($loop ->first)
        <div class="carousel-item active">
            <div class="row">
                @foreach ($data as $game)
                <div class="col">
                    <div class="card bg-black text-light">
                        <div class="card-header d-md-flex justify-content-center">{{$game['game']}}</div>
                        <div class="card-body d-md-flex justify-content-center">{{$game['description']}}</div>
                        <div class="card-footer "><a class="btn btn-danger d-md-flex justify-content-center" href="{{route('genres.show',$game->genre->genre_code)}}">{{$game->genre->genre_name}}</a></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @else
        <div class="carousel-item active">
            <div class="row">
                @foreach ($data as $game)
                <div class="col">
                    <div class="card bg-black text-light">
                        <div class="card-header d-md-flex justify-content-center">{{$game['game']}}</div>
                        <div class="card-body d-md-flex justify-content-center">{{$game['description']}}</div>
                        <div class="card-footer"><a class="btn btn-danger d-md-flex justify-content-center" href="{{route('genres.show',$game->genre->genre_code)}}">{{$game->genre->genre_name}}</a></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
        @endforeach
        <button class="carousel-control-prev" type="button" data-bs-target="#rekomen" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#rekomen" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>
@endsection