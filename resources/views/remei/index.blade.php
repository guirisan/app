@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Remeis</div>

                <div class="panel-body">

                    @if (count($remeis))
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>nom</th>
                              <th>nom_cientific</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            
                            @foreach ($remeis as $remei)
                              <tr>
                                <td>
                                  <a href="/remeis/{{ $remei->id }}">
                                      {{ $remei->nom}} 
                                  </a>                                  
                                </td>
                                <td>
                                  {{ $remei->nom_cientific }}
                                </td>
                                <td>
                                  <a href="/remeis/{{ $remei->id }}/edit">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                  </a>
                                  {{ Form::open(['method' => 'DELETE', 'route' => ['remeis.destroy', $remei->id]]) }}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-warning']) }}
                                  {{ Form::close() }}
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>

                    @else
                      <h3>No hi ha remeis creats</h3>
                    @endif
                    <a class="btn btn-primary" href="/remeis/create/">
                      Afegir remei
                    </a>

                </div>


            </div>
        </div>
    </div>
</div>
@endsection
