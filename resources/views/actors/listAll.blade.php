@extends("index")
@section('content')

@foreach($actors as $actor)

    <div class="list-group">
      <a href="{{ url("/info/show/actor", $actor->id) }}" class="list-group-item">
          {{ $actor->name }}&nbsp;{{$actor->surname}}
      </a>
    </div>

@endforeach

@stop

