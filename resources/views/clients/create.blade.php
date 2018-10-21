@extends('index')
@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
            <!-- Formularz -->
                @include('clients.form.form_errors')
            
            {!! Form::open(['url' => 'admin/clients', 'class' => 'form-horizontal']) !!}
                @include('clients.form.form', ['buttonText'=>'Dodaj klienta'])
            {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>

@stop