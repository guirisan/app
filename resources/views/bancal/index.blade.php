@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Bancals</div>

                <div class="panel-body">

                    @if (count($bancals))
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>nom</th>
                              <th>superficie</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            
                            @foreach ($bancals as $bancal)
                              <tr>
                                <td>
                                  <a href="/bancals/{{ $bancal->id }}">
                                      {{ $bancal->nom}} 
                                  </a>                                  
                                </td>
                                <td>
                                  {{ $bancal->superficie }}
                                </td>
                                <td>
                                  <a href="/bancals/{{ $bancal->id }}/edit">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                  </a>
                                  {{ Form::open(['method' => 'DELETE', 'route' => ['bancals.destroy', $bancal->id]]) }}
                                        {{ Form::button('<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>', ['class' => 'btn-link', 'type' => 'submit']) }}
                                  {{ Form::close() }}
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>

                    @else
                      <h3>No hi ha bancals creades</h3>
                    @endif
                    <a class="btn btn-primary" href="/bancals/create/">
                      Afegir bancal
                    </a>

                </div>


            </div>
        </div>
    </div>
</div>
@endsection
