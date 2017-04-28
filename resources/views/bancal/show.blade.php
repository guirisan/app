@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>{{ $bancal->nom }}</strong> </div>

            <div class="panel-body">
              <p>
                <strong>id:</strong> {{ $bancal->id}}
              </p>
              <p>
                <strong>nom:</strong> {{ $bancal->nom}}
              </p>
              <p>
                <strong>descripcio:</strong> {{ $bancal->descripcio}}
              </p>
              <p>
                <strong>superficie:</strong> {{ $bancal->superficie}}
              </p>

              @if (count($bancal->images))
                <p> 
                  <strong>foto:</strong> <img src="{{ $bancal->images->first()->url }}">
                </p>
              @endif
              <h3>Parcel·les</h3>

              @if (count($bancal->parceles))
                @foreach ($bancal->parceles as $parcela)
                  <a href="/parcela/{{ $parcela->id }}">
                    {{ $parcela->nom }}
                  </a>
                @endforeach
              @else
                <p>no hi ha parceles associades</p>
              @endif

            </div>


        </div>
    </div>
</div>

@endsection
