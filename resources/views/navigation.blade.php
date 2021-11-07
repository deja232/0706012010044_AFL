<nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
<a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ url('/image/logo.png') }}" width="60px" height="65x" alt="Logo" class="d-inline-block">
        </a>
    <ul class="navbar-nav nav-pills ">
      <li class="nav-item">
        <a class="nav-link {{ ($title == 'Recommendation')? 'active':'' }}" href="/recommendation">Recommendation</a>
      </li>
     <li class="nav-item">
        <a class="nav-link {{ ($title == 'Project')? 'active':'' }}" href="{{route('games.index')}}">Library</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ ($title == 'Course')? 'active':'' }}" href="{{route('genres.index')}}">Genre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ $active_contact ?? ''}}" href="/contact">About </a>
      </li>
    </ul>
</div>
</nav>