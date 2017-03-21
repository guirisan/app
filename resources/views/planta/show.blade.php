@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>{{ $planta->nom }}</strong> </div>

            <div class="panel-body">
              <p>
                <strong>id:</strong> {{ $planta->id}}
              </p>
              <p>
                <strong>nom:</strong> {{ $planta->nom}}
              </p>
              <p>
                <strong>nom_cientific:</strong> {{ $planta->nom_cientific}} 
              </p>
              <p>
                <strong>descripcio:</strong> {{ $planta->descripcio}}
              </p>
              <p>
                <strong>sembra_ini:</strong> {{ $planta->sembra_ini}}
              </p>
              <p>
                <strong>sembra_fi:</strong> {{ $planta->sembra_fi}} 
              </p>
              <p>
                <strong>sembra:</strong> {{ $planta->sembra}}
              </p>
              <p>
                <strong>cultiu:</strong> {{ $planta->cultiu}}
              </p>
              <p>
                <strong>collita:</strong> {{ $planta->collita}} 
              </p>
              <p>
                <strong>user_id:</strong> {{ $planta->user_id}} 
              </p>

              <p>
                <strong>grup:</strong> {{ $planta->grup->nom}} 
              </p>

              <p>
                <strong>familia:</strong> {{ $planta->familia->nom}}
              </p>
              
              @if (count($planta->images))
                <p> 
                  <strong>foto:</strong> <img src="{{ $planta->images->first()->url }}">
                </p>
              @endif 

            </div>


        </div>
    </div>
</div>

@endsection
