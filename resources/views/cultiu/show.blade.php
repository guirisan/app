@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>{{ $cultiu->id }}</strong> </div>

            <div class="panel-body">
              <p>
                <strong>user_id:</strong> {{ $cultiu->user_id}}
              </p>
              <p>
                <strong>parcela_id:</strong> {{ $cultiu->parcela_id}}
              </p>
              <p>
                <strong>planta_id:</strong> {{ $cultiu->planta_id}}
              </p>
              <p>
                <strong>data_ini:</strong> {{ $cultiu->data_ini}}
              </p>
              <p>
                <strong>data_fi:</strong> {{ $cultiu->data_fi}}
              </p>
              <p>
                <strong>descripcio:</strong> {{ $cultiu->descripcio}}
              </p>
              
              @if (count($cultiu->images))
                <p> 
                  <strong>foto:</strong> <img src="{{ $cultiu->images->first()->url }}">
                </p>
              @endif
            </div>


        </div>
    </div>
</div>

@endsection
