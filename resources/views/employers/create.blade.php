@extends('index')
@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
            <!-- Formularz -->
                @include('employers.form.form_errors')
            
            {!! Form::open(['url' => 'admin/employers', 'class' => 'form-horizontal']) !!}
                @include('employers.form.form', ['buttonText'=>'Dodaj pracownika'])
            {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>

@stop