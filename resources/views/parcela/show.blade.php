@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>{{ $parcela->nom }}</strong> </div>

            <div class="panel-body">
              <p>
                <strong>id:</strong> {{ $parcela->id}}
              </p>
              <p>
                <strong>nom:</strong> {{ $parcela->nom}}
              </p>
              <p>
                <strong>descripcio:</strong> {{ $parcela->descripcio}}
              </p>
              <p>
                <strong>superficie:</strong> {{ $parcela->superficie}}
              </p>

              <p>
                <strong>ocupada:</strong> {{ $parcela->ocupada}} 
              </p>
              
              @if (count($parcela->images))
                <p> 
                  <strong>foto:</strong> <img src="{{ $parcela->images->first()->url }}">
                </p>
              @endif
              <h3>cultius</h3>

              @if (count($parcela->cultius))
                @foreach ($parcela->cultius as $cultiu)
                  <a href="/cultiu/{{ $cultiu->id }}">
                    {{ $cultiu->id }}
                  </a>
                @endforeach
              @else
                <p>no hi ha cultius associats</p>
              @endif

            </div>


        </div>
    </div>
</div>

@endsection
