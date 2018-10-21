@extends('index')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
            <!-- Formularz -->
            	
            
                @include('movies.form.form_errors')
                
                {!! Form::model($movie, ['method'=>'PATCH', 'class'=>'form-horizontal', 'action'=>['Admin\MovieController@update', $movie->id]]) !!}
            		
                @include('movies.form.form', ['buttonText'=>'Zapisz zmiany'])

            	{!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop