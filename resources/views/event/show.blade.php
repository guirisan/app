@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>{{ $event->id }}</strong> </div>

            <div class="panel-body">
              <p>
                <strong>user_id:</strong> {{ $event->user_id}}
              </p>
              <p>
                <strong>parcela_id:</strong> {{ $event->parcela_id}}
              </p>
              <p>
                <strong>data:</strong> {{ $event->data}}
              </p>
              <p>
                <strong>fet:</strong> {{ $event->fet}}
              </p>
              <p>
                <strong>descripcio:</strong> {{ $event->descripcio}}
              </p>
              
              @if (count($event->images))
                <p> 
                  <strong>foto:</strong> <img src="{{ $event->images->first()->url }}">
                </p>
              @endif
            </div>


        </div>
    </div>
</div>

@endsection
