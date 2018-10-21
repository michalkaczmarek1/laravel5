@extends('index')
@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
            <!-- Formularz -->
                @include('actors.form.form_errors')
            
            {!! Form::open(['url' => 'admin/actors', 'class' => 'form-horizontal']) !!}
                @include('actors.form.form', ['buttonText'=>'Dodaj aktora'])
            {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>

@stop