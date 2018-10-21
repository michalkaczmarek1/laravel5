@extends("index")
@section('content')

@foreach($movies as $movie)

    <div class="list-group">
      <a href="{{ url("/info/show/movie", $movie->id) }}" class="list-group-item active">
        {{ $movie->title }}
      </a>
      <p href="#" class="list-group-item">Cena:&nbsp;{{ $movie->price }}</p>
      <p href="#" class="list-group-item">Rok produkcji:&nbsp;{{ $movie->year }}</p>
      <p href="#" class="list-group-item">Dodano:&nbsp;{{ $movie->created_at }}</p>
    </div>

@endforeach


<a href="/info/movies" class="btn btn-info" style="margin-top: 10px">Filmy</a>
<a href="/info/actors" class="btn btn-info" style="margin-top: 10px">Aktorzy</a>

@stop

