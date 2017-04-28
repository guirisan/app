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
                  ACÍ VAN LES IMATGES                

              @else
                <p>
                  No hi ha imatges de la plaga
                </p>
              @endif
              
              <h3>plantes</h3>
              @if (count($plaga->plantes))
                @foreach ($plaga->plantes as $planta)
                  <p>
                    <a href="/plantes/{{ $planta->id }}/">
                      {{ $planta->nom }}
                    </a>
                    <strong>{{ $planta->pivot->descripcio }}</strong>
                  </p>
                @endforeach
              @else
                <p>o hi ha plantes associades</p>
              @endif
              <a class="btn btn-primary" data-toggle="modal" href='#modalCreatePlanta'>Afecta a...</a>
              <div class="modal fade" id="modalCreatePlanta">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Afegir planta</h4>
                    </div>
                    <div class="modal-body">
                      {!! Form::open([
                        'method' => 'POST',
                        'route' => ['plagues.storePlanta', $plaga->id]]) 
                      !!}
                        @include('planta._dropdown', 
                            ['submitButtonText' => 'Guardar afectada' ],
                            ['resetButtonText' => 'Buidar' ])
                      {!! Form::close() !!}
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Tanca</button>
                    </div>
                  </div>
                </div>
              </div>
              

            </div>


        </div>
    </div>
</div>

@endsection
