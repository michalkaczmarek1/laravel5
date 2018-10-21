
<div class="form-group">
    <div class="col-md-4 control-label">
        {!! Form::label('name', 'Imię: ') !!}
    </div>
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 control-label">
        {!! Form::label('surname', 'Nazwisko: ') !!}
    </div>
    <div class="col-md-6">
        {!! Form::text('surname', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 control-label">
        {!! Form::label('city', 'Miasto: ') !!}
    </div>
    <div class="col-md-6">
        {!! Form::text('city', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 control-label">
        {!! Form::label('salary', 'Płaca: ') !!}
    </div>
    <div class="col-md-6">
        {!! Form::text('salary', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::submit($buttonText, ['class' => 'btn btn-primary']) !!}
    </div>
</div>

<a href="{{ action('InfoController@admin') }}" class="btn btn-info">Powrót</a>