@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Plantes</div>

                <div class="panel-body">

                    @if (count($plantes))
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>nom</th>
                              <th>nom_cientific</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            
                            @foreach ($plantes as $planta)
                              <tr>
                                <td>
                                  <a href="/plantes/{{ $planta->id }}">
                                      {{ $planta->nom}} 
                                  </a>                                  
                                </td>
                                <td>
                                  {{ $planta->nom_cientific }}
                                </td>
                                <td>
                                  <a href="/plantes/{{ $planta->id }}/edit">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                  </a>
                                  <a href="/plantes/{{ $planta->id }}/" data-method="delete" data-confirm="Are you sure?">
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                  </a>
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>

                    @else
                      <h3>No hi ha plantes creades</h3>
                    @endif
                    <a class="btn btn-primary" href="/plantes/create/">
                      Afegir planta
                    </a>

                </div>


            </div>
        </div>
    </div>
</div>
@endsection
