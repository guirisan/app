@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Cultius</div>

                <div class="panel-body">

                    @if (count($cultius))
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>id</th>
                              <th>parcela</th>
                              <th>planta</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            
                            @foreach ($cultius as $cultiu)
                              <tr>
                                <td>
                                  <a href="/cultius/{{ $cultiu->id }}">
                                      {{ $cultiu->id}} 
                                  </a>                                  
                                </td>
                                <td>
                                  {{ $cultiu->parcela_id }}
                                </td>
                                <td>
                                  {{ $cultiu->planta_id }}
                                </td>
                                <td>
                                  <a href="/cultius/{{ $cultiu->id }}/edit">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                  </a>
                                  {{ Form::open(['method' => 'DELETE', 'route' => ['cultius.destroy', $cultiu->id]]) }}
                                        {{ Form::button('<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>', ['class' => 'btn-link', 'type' => 'submit']) }}
                                  {{ Form::close() }}
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>

                    @else
                      <h3>No hi ha cultius creades</h3>
                    @endif
                    <a class="btn btn-primary" href="/cultius/create/">
                      Afegir cultiu
                    </a>

                </div>


            </div>
        </div>
    </div>
</div>
@endsection
