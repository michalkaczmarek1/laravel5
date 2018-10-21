@extends("index")
@section('content')

@if(Session::has('employer_created'))
<div class="alert alert-success">
     {{ Session::get('employer_created') }}
</div>
@endif

    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Pracownicy&nbsp;<a href="/admin" class="btn-sm btn-info" style="float: right">Powrót</a>&nbsp;<a href="/admin/employers/create" class="btn-sm btn-success" style="float: right">Dodaj pracownika</a></div>

      <!-- Table -->
      <table class="table">
          <tr>
            <th>Id</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Akcje</th>
          </tr>
          @foreach($employers as $employer)
            <tr>
                <td>{{$employer->id}}</td>
                <td>{{$employer->name}}</td>
                <td>{{$employer->surname}}</td>
                <td>
                    <a href="{{ action('Admin\EmployerController@show', $employer->id) }}" class="btn btn-success">Pokaż</a> 
                </td>
            </tr>
          @endforeach
      </table>
    </div>

@stop