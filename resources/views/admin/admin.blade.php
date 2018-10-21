@extends("index")
@section('content')



<!--Panel aktorów-->

    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Aktorzy&nbsp;<a href="/admin/actors" class="btn-sm btn-info" style="float: right">Zobacz wszystkich aktorów</a>&nbsp;<a href="/admin/actors/create" class="btn-sm btn-success" style="float: right">Dodaj aktora</a></div>

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

<!--Panel filmów-->

    <div class="panel panel-default">
      <!-- Default panel contents -->
       <div class="panel-heading">Filmy&nbsp;<a href="/admin/movies" class="btn-sm btn-info" style="float: right">Zobacz wszystkie filmy</a>&nbsp;<a href="/admin/movies/create" class="btn-sm btn-success" style="float: right">Dodaj film</a></div>

      <!-- Table -->
      <table class="table">
          <tr>
            <th>Id</th>
            <th>Tytuł</th>
            <th>Rok produkcji</th>
            <th>Cena (w zł)</th>
            <th>Akcje</th>
          </tr>
          @foreach($movies as $movie)
            <tr>
                <td>{{$movie->id}}</td>
                <td>{{$movie->title}}</td>
                <td>{{$movie->year}}</td>
                <td>{{$movie->price}}</td>
                <td>
                    <a href="{{ action('Admin\MovieController@show', $movie->id) }}" class="btn btn-success">Pokaż</a> 
                </td>
            </tr>
          @endforeach
      </table>
    </div>

<!--Panel klientów-->

   <div class="panel panel-default">
      <!-- Default panel contents -->
     <div class="panel-heading">Klienci&nbsp;<a href="/admin/clients" class="btn-sm btn-info" style="float: right">Zobacz wszystkich klientów</a>&nbsp;<a href="/admin/clients/create" class="btn-sm btn-success" style="float: right">Dodaj klienta</a></div>

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

<!--Panel pracowników-->

    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Pracownicy&nbsp;<a href="/admin/employers" class="btn-sm btn-info" style="float: right">Zobacz wszystkich pracowników</a>&nbsp;<a href="/admin/employers/create" class="btn-sm btn-success" style="float: right">Dodaj pracownika</a></div>

      <!-- Table -->
      <table class="table">
          <tr>
            <th>Id</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Miasto</th>
            <th>Płaca</th>
            <th>Akcje</th>
          </tr>
          @foreach($employers as $employer)
            <tr>
                <td>{{$employer->id}}</td>
                <td>{{$employer->name}}</td>
                <td>{{$employer->surname}}</td>
                <td>{{$employer->city}}</td>
                <td>{{$employer->salary}}</td>
                <td>
                    <a href="{{ action('Admin\EmployerController@show', $employer->id) }}" class="btn btn-success">Pokaż</a> 
                </td>
            </tr>
          @endforeach
      </table>
    </div>

@stop