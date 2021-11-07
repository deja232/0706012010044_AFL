@extends('mainlayout')

@section('title','Genre')
@section('pagetitle','Genre')

@section('main_content')
<div class="mt-4 p-5 bekgron text-light">
        <a href="{{ URL::previous() }}" class="btn btn-warning"> <i class="fas fa-arrow-left"></i>Return</a>
        <h1 >{{$genre['genre_code']}}</h1>
        <p ><b >Code : </b>{{ $genre['genre_code'] }}</p>
        <p ><b >Genre : </b>{{ $genre['genre_name'] }}</p>
        <p ><b >Developer : </b>{{$genre['develop']}}</p>
        <p ><b >Description : </b>{{$genre['description']}}</p>

            <p>List Game</p>

            <table class="table">
                <thead>
                    <tr class="text-light">
                        <th scope="col">No</th>
                        <th scope="col">Code</th>
                        <th scope="col">Game</th>
                        <th scope="col">Genre</th>
                    </tr>
                </thead>
                <tbody>
                    @php $index = 1 @endphp
                    @foreach ($genre->games as $g)
                        <tr class="text-light">
                            <th scope="row">{{ $index }}</th>
                            @php $index++ @endphp
                            <td>{{ $g['genree'] }}</td>
                            <td>{{ $g['game'] }}</td>
                            <td>{{ $g['developer'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
</div>
    @endsection