@extends("index")
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">{{$client->name}} &nbsp;{{$client->surname}}</h3>
    </div>
    <div class="panel-body">
        <h3>Dodany: &nbsp;{{$client->created_at}}. Zaaktualizowany:&nbsp;{{$client->updated_at}} </h3>
    </div>
    <div class="panel-footer">
        <a href="{{ action('Admin\ClientController@edit', $client->id) }}" class="btn btn-warning">Edytuj</a>
       {!! Form::model($client, ['method'=>'DELETE', 'class'=>'form-horizontal', 'style'=>'display: inline', 'action'=>['Admin\ClientController@destroy', $client->id]]) !!}
            <button class="btn btn-danger" type="submit">Usuń</button>
        {!! Form::close() !!} 
        <a href="{{ action('InfoController@admin') }}" class="btn btn-info">Przejdź do panelu zarządzania</a>
    </div>
</div>

@stop