@extends("index")
@section('content')

@if(Session::has('client_created'))
<div class="alert alert-success">
     {{ Session::get('client_created') }}
</div>
@endif

    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Klienci&nbsp;<a href="/admin" class="btn-sm btn-info" style="float: right">Powrót</a>&nbsp;<a href="/admin/clients/create" class="btn-sm btn-success" style="float: right">Dodaj klienta</a></div>

      <!-- Table -->
      <table class="table">
          <tr>
            <th>Id</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Akcje</th>
          </tr>
          @foreach($clients as $client)
            <tr>
                <td>{{$client->id}}</td>
                <td>{{$client->name}}</td>
                <td>{{$client->surname}}</td>
                <td>
                    <a href="{{ action('Admin\ClientController@show', $client->id) }}" class="btn btn-success">Pokaż</a> 
                </td>
            </tr>
          @endforeach
      </table>
    </div>

@stop