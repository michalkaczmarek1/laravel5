@extends("index")
@section('content')

@foreach($movies as $movie)

    <div class="list-group">
      <a href="{{ url("/info/show/movie", $movie->id) }}" class="list-group-item active">
        {{ $movie->title }}
      </a>
      <a href="#" class="list-group-item">Cena:&nbsp;{{ $movie->price }}</a>
      <a href="#" class="list-group-item">Rok produkcji:&nbsp;{{ $movie->year }}</a>
      <a href="#" class="list-group-item">Dodano:&nbsp;{{ $movie->created_at }}</a>
    </div>

@endforeach



@stop

