@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Parceles</div>

                <div class="panel-body">

                    @if (count($parceles))
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>nom</th>
                              <th>bancal</th>
                              <th>superficie</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            
                            @foreach ($parceles as $parcela)
                              <tr>
                                <td>
                                  <a href="/parceles/{{ $parcela->id }}">
                                      {{ $parcela->nom}} 
                                  </a>                                  
                                </td>
                                <td>
                                  {{ $parcela->bancal_id }}
                                </td>
                                <td>
                                  {{ $parcela->superficie }}
                                </td>
                                <td>
                                  <a href="/parceles/{{ $parcela->id }}/edit">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                  </a>
                                  {{ Form::open(['method' => 'DELETE', 'route' => ['parceles.destroy', $parcela->id]]) }}
                                        {{ Form::button('<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>', ['class' => 'btn-link', 'type' => 'submit']) }}
                                  {{ Form::close() }}
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>

                    @else
                      <h3>No hi ha parceles creades</h3>
                    @endif
                    <a class="btn btn-primary" href="/parceles/create/">
                      Afegir parcela
                    </a>

                </div>


            </div>
        </div>
    </div>
</div>
@endsection
