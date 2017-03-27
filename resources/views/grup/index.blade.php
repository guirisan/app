@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Grups</div>

                <div class="panel-body">
                    @if (count($grups))
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>nom</th>
                              <th>nom_altres</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                                
                          @foreach ($grups as $grup)
                              <tr>
                                <td>
                                  <a href="/grups/{{ $grup->id }}">
                                      {{ $grup->nom}} 
                                  </a>                                  
                                </td>
                                <td>
                                  {{ $grup->nom_altres }}
                                </td>
                                <td>
                                  <a href="/grups/{{ $grup->id }}/edit">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                  </a>
                                  {{ Form::open(['method' => 'DELETE', 'route' => ['grups.destroy', $grup->id]]) }}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-warning']) }}
                                  {{ Form::close() }}
                                </td>
                              </tr>
                          @endforeach
                        </tbody>
                      </table>
                    @else
                    <h3>No hi ha grups creades</h3>
                    @endif
                    <a class="btn btn-primary" href="/grups/create/">
                      Afegir grup
                    </a>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
