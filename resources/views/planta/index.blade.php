@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Plantes</div>

                <div class="panel-body">
                    <!-- Button trigger modal -->
                    <a class="btn btn-primary" href="/plantes/create/">
                      Afegir planta
                    </a>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                          </div>
                          <div class="modal-body">
                            ...
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>


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
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
