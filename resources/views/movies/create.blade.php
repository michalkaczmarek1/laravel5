@extends('index')
@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
            <!-- Formularz -->
                @include('movies.form.form_errors')
            
            {!! Form::open(['url' => 'admin/movies', 'class' => 'form-horizontal']) !!}
                @include('movies.form.form', ['buttonText'=>'Dodaj film'])
            {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>

@stop