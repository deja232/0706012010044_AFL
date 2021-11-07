@extends('mainlayout')

@section('title','Game Library')

@section('main_content')
<h1 class="title">Library</h1>
<table class="table table-borderless table-hover">
                <tr class="text-light">
                    <td>No</td>
                    <td>Developer</td>
                    <td>GAME</td>
                    <td>Genre</td>
                    <td>Description</td>
                    <td class="text-center">Actions</td>
</tr>
<div class="d-flex justify-content-end"><a href="{{ route('games.create') }}"><button type="submit" class="btn btn-light mb-2">Add New Game</button></a></div>
     
     @foreach ($game as $g)
     <tr class="text-light">
     <td>{{ $loop->index+1 }}</td>
     <td>{{ $g['developer'] }}</td>
     <td>{{ $g['game'] }}</td>
     <td> <a href="{{ route('genres.show', $g->genre->genre_code) }}">{{$g->genre->genre_name}}</a></td>
     <td>{{ $g['description'] }}</td>
 
     <td> 
     <div class="d-grid d-md-flex justify-content-center">
         <a href="{{ route('games.show', $g->genree) }}"><button type="button" class="btn btn-danger me-md-2">Details</button></a>
         <a href="{{ route('games.edit', $g->id) }}"><button type="button" class="btn btn-secondary me-md-2">Update</button></a>
         <form action="{{ route('games.destroy', $g->id) }}" method="post">
             @csrf
             @method('DELETE')
             <button type="submit" class="btn btn-light">Delete Game</button>
         </form>
     </div>
 
     </td>
     </tr>
     @endforeach
     </table>
 </div>
 @endsection