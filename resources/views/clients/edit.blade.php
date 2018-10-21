@extends('index')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
            <!-- Formularz -->
            	
            
                @include('clients.form.form_errors')
                
                {!! Form::model($client, ['method'=>'PATCH', 'class'=>'form-horizontal', 'action'=>['Admin\ClientController@update', $client->id]]) !!}
            		
                @include('clients.form.form', ['buttonText'=>'Zapisz zmiany'])

            	{!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop