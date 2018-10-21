@extends("index")
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">{{$movie->title}}</h3>
    </div>
    <div class="panel-body">
      {{$movie->description}}
    </div>
    <div class="panel-footer">
        @auth
            <a href="{{ action('Admin\MovieController@edit', $movie->id) }}" class="btn btn-warning">Edytuj</a>
           {!! Form::model($movie, ['method'=>'DELETE', 'class'=>'form-horizontal', 'style'=>'display: inline', 'action'=>['Admin\MovieController@destroy', $movie->id]]) !!}
                <button class="btn btn-danger" type="submit">Usuń</button>
            {!! Form::close() !!} 
            <a href="{{ action('InfoController@admin') }}" class="btn btn-info">Przejdź do panelu zarządzania</a>
        @endauth
        @guest
            <a href="{{ action('InfoController@admin') }}" class="btn btn-info">Przejdź do panelu zarządzania</a>
        @endguest
    </div>
</div>

@stop