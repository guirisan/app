@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>{{ $planta->nom }}</strong> </div>

            <div class="panel-body">
              <p>
                <a href="/plantes/{{ $planta->id }}/edit">
                  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </a>
                {!! Form::model(new App\Image, ['method' => 'POST', 'route' => 'images.store', 'files' => true]) !!}
                  @include('image._inputs', 
                      ['imageable_type' => 'App\Planta'],
                      ['imageable_id' => $planta->id ],
                      ['submitButtonText' => 'Guardar imatge' ])
                {{ Form::close() }}

              </p>
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
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>nom</th>
                      <th>descripcio</th>
                      <th>imatge</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($planta->images as $image)
                    <tr>
                      <td>{{ $image->nom }}</td>
                      <td>{{ $image->descripcio }}</td>
                      <td><img src="{{ $image->url }}"></td>
                    </tr>

                  @endforeach
                  </tbody>
                </table>                

              @endif
              <h3>plagues</h3>

              @if (count($planta->plagues))
                @foreach ($planta->plagues as $plaga)
                  <a href="/plaga/{{ $plaga->id }}">
                    {{ $plaga->nom }}
                  </a>
                @endforeach
              @else
                <p>no hi ha plagues associades</p>
              @endif

            </div>


        </div>
    </div>
</div>

@endsection
