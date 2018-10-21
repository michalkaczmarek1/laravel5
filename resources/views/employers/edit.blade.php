@extends('index')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
            <!-- Formularz -->
            	
            
                @include('employers.form.form_errors')
                
                {!! Form::model($employer, ['method'=>'PATCH', 'class'=>'form-horizontal', 'action'=>['Admin\EmployerController@update', $employer->id]]) !!}
            		
                @include('employers.form.form', ['buttonText'=>'Zapisz zmiany'])

            	{!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop