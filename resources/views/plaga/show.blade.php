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
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>nom</th>
                      <th>descripcio</th>
                      <th>imatge</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($plaga->images as $image)
                    <tr>
                      <td>{{ $image->nom }}</td>
                      <td>{{ $image->descripcio }}</td>
                      <td><img src="{{ $image->path }}"></td>
                    </tr>

                  @endforeach
                  </tbody>
                </table>                

              @else
                <p>
                  No hi ha imatges de la plaga
                </p>
              @endif
              <div class="row">
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                  
                  <form action="/images" class="dropzone" id="my-awesome-dropzone">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('imageable_type') ? ' has-error' : '' }}">
                        <p>imageable_type</p>
                        {!! Form::text('imageable_type', "App\Plaga", ['class' => 'form-control', 'required' => 'required']) !!}
                    </div>

                    <div class="form-group{{ $errors->has('imageable_id') ? ' has-error' : '' }}">
                        <p>imageable_id</p>
                        {!! Form::text('imageable_id', $plaga->id, ['class' => 'form-control', 'required' => 'required']) !!}
                    </div>

                  </form>
                </div>
              </div>

              <a class="btn btn-primary" data-toggle="modal" href='#modalCreateImage'>Afegir imatge</a>
              <div class="modal fade" id="modalCreateImage">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Afegir imatge</h4>
                    </div>
                    <div class="modal-body">
                      {!! Form::model(new App\Image, ['method' => 'POST', 'route' => 'images.store', 'files' => true, 'class' => 'dropzone']) !!}
                        @include('image._inputs', 
                            ['imageable_type' => 'App\Plaga'],
                            ['imageable_id' => $plaga->id ],
                            ['submitButtonText' => 'Guardar imatge' ])
                      {{ Form::close() }}

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>


              <h3>plantes</h3>
              @if (count($plaga->plantes))
                @foreach ($plaga->plantes as $planta)
                  <p>
                    <a href="/planta/{{ $planta->id }}/">
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
