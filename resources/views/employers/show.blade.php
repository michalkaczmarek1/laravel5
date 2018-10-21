@extends("index")
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">{{$employer->name}} &nbsp;{{$employer->surname}}</h3>
    </div>
    <div class="panel-body">
        <p>
            {{ $employer->city }}
            {{ $employer->salary }}
        </p>
    </div>
    <div class="panel-footer">
        <a href="{{ action('Admin\EmployerController@edit', $employer->id) }}" class="btn btn-warning">Edytuj</a>
       {!! Form::model($employer, ['method'=>'DELETE', 'class'=>'form-horizontal', 'style'=>'display: inline', 'action'=>['Admin\EmployerController@destroy', $employer->id]]) !!}
            <button class="btn btn-danger" type="submit">Usuń</button>
        {!! Form::close() !!} 
        <a href="{{ action('InfoController@admin') }}" class="btn btn-info">Przejdź do panelu zarządzaniat</a>
    </div>
</div>

@stop