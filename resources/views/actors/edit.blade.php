@extends('index')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
            <!-- Formularz -->
            	
            
                @include('actors.form.form_errors')
                
                {!! Form::model($actor, ['method'=>'PATCH', 'class'=>'form-horizontal', 'action'=>['Admin\ActorController@update', $actor->id]]) !!}
            		
                @include('actors.form.form', ['buttonText'=>'Zapisz zmiany'])

            	{!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop