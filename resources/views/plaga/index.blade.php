@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Plagues</div>

                <div class="panel-body">

                    @if (count($plagues))
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>nom</th>
                              <th>nom_cientific</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            
                            @foreach ($plagues as $plaga)
                              <tr>
                                <td>
                                  <a href="/plagues/{{ $plaga->id }}">
                                      {{ $plaga->nom}} 
                                  </a>                                  
                                </td>
                                <td>
                                  {{ $plaga->nom_cientific }}
                                </td>
                                <td>
                                  <a href="/plagues/{{ $plaga->id }}/edit">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                  </a>
                                  {{ Form::open(['method' => 'DELETE', 'route' => ['plagues.destroy', $plaga->id]]) }}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-warning']) }}
                                  {{ Form::close() }}
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>

                    @else
                      <h3>No hi ha plagues creades</h3>
                    @endif
                    <a class="btn btn-primary" href="/plagues/create/">
                      Afegir plaga
                    </a>

                </div>


            </div>
        </div>
    </div>
</div>
@endsection
