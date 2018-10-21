
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
        {!! Form::label('employer_id', 'Wybierz przedstawiciela: ') !!}
    </div>
    <div class="col-md-6">
        {!! Form::select('employer_id', $employers, null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::submit($buttonText, ['class' => 'btn btn-primary']) !!}
    </div>
</div>

<a href="{{ action('InfoController@admin') }}" class="btn btn-info">Powrót</a>