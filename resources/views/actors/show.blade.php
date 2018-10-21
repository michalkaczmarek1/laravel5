@extends("index")
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">{{$actor->name}}&nbsp;{{$actor->surname}}</h3>
    </div>
    <div class="panel-body">
      {{$actor->description}}
    </div>
    <div class="panel-footer">
        @auth
            <a href="{{ action('Admin\ActorController@edit', $actor->id) }}" class="btn btn-warning">Edytuj</a>
           {!! Form::model($actor, ['method'=>'DELETE', 'class'=>'form-horizontal', 'style'=>'display: inline', 'action'=>['Admin\ActorController@destroy', $actor->id]]) !!}
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