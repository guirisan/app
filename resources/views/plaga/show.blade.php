 @extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>{{ $plaga->nom }}</strong> </div>

            <div class="panel-body">
              <p>
                <strong>id:</strong> {{ $plaga->id }}
              </p>
              <p>
                <strong>nom:</strong> {{ $plaga->nom }}
              </p>
              <p>
                <strong>nom_cientific:</strong> {{ $plaga->nom_cientific }} 
              </p>
              <p>
                <strong>descripcio:</strong> {{ $plaga->descripcio }}
              </p>
              <p>
              <p>
                <strong>tractament:</strong> {{ $plaga->tractament }} 
              </p>
              
              @if (count($plaga->images))
                <p> 
                  <strong>foto:</strong> <img src="{{ $plaga->images->first()->url }}">
                </p>
              @endif 

              <h3>plantes</h3>
              @if (count($plaga->plantes))
                @foreach ($plaga->plantes as $planta)
                  <a href="/planta/{{ $planta->id }}/">
                    {{ $planta->nom }}
                  </a>
                @endforeach
              @else
                <p>o hi ha plantes associades</p>
              @endif

            </div>


        </div>
    </div>
</div>

@endsection
