@extends('mainlayout')

@section('title','Genres')

@section('main_content')
<h1 class="title">Genre </h1>
<table class="table table-borderless">
    <tr class="text-light">
        <td>No</td>
        <td>Code</td>
        <td>Genre</td>
        <td>Developer</td>
        <td>Description</td>
        <td class="text-center">Actions</td>
    </tr>


    <div class="d-flex justify-content-end"><a href="{{ route('genres.create') }}"><button type="button" class="btn btn-light mb-2">Add new Genre</button></a></div>

    @foreach ($genre as $gen)
    <tr class="text-light">
        <td>{{ $loop->index+1 }}</td>
        <td>{{ $gen['genre_code'] }}</td>
        <td>{{ $gen['genre_name'] }}</td>
        <td>{{ $gen['develop'] }}</td>
        <td>{{ $gen['description'] }}</td>

        <td>
            <div class="d-grid d-md-flex justify-content-center">
                <a href="{{ route('genres.show', $gen->genre_code) }}"><button type="button" class="btn btn-danger me-md-2">Details</button></a>
                <a href="{{ route('genres.edit', $gen->genre_code) }}"><button type="button" class="btn btn-secondary me-md-2">Change</button></a>
                <form action="{{ route('genres.destroy', $gen->genre_code) }}" method="post" onsubmit="return confirm('Are you Sure ?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-light">Delete Genre</button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
</table>
</div>
@endsection