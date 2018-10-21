@extends("index")
@section('content')

@if(Session::has('movie_created'))
<div class="alert alert-success">
     {{ Session::get('movie_created') }}
</div>
@endif



    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Filmy&nbsp;<a href="/admin" class="btn-sm btn-info" style="float: right">Powrót</a>&nbsp;<a href="/admin/movies/create" class="btn-sm btn-success" style="float: right">Dodaj film</a></div>

      <!-- Table -->
      <table class="table">
          <tr>
            <th>Id</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Akcje</th>
          </tr>
          @foreach($movies as $movie)
            <tr>
                <td>{{$movie->id}}</td>
                <td>{{$movie->title}}</td>
                <td>{{$movie->year}}</td>
                <td>{{$movie->price}}</td>
                <td>{{$movie->description}}</td>
                <td>
                    <a href="{{ action('Admin\MovieController@show', $movie->id) }}" class="btn btn-success">Pokaż</a> 
                </td>
            </tr>
          @endforeach
      </table>
    </div>

@stop