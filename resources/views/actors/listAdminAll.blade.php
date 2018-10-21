@extends("index")
@section('content')

@if(Session::has('actor_created'))
<div class="alert alert-success">
     {{ Session::get('actor_created') }}
</div>
@endif

<!--Panel aktorów-->

    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Aktorzy&nbsp;<a href="/admin" class="btn-sm btn-info" style="float: right">Powrót</a>&nbsp;<a href="/admin/actors/create" class="btn-sm btn-success" style="float: right">Dodaj aktora</a></div>

      <!-- Table -->
      <table class="table">
          <tr>
            <th>Id</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Akcje</th>
          </tr>
          @foreach($actors as $actor)
            <tr>
                <td>{{$actor->id}}</td>
                <td>{{$actor->name}}</td>
                <td>{{$actor->surname}}</td>
                <td>
                    <a href="{{ action('Admin\ActorController@show', $actor->id) }}" class="btn btn-success">Pokaż</a> 
                </td>
            </tr>
          @endforeach
      </table>
    </div>

@stop