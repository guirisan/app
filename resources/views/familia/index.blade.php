@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Families</div>

                <div class="panel-body">
                    @if (count($families))
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>nom</th>
                              <th>nom_altres</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                                
                          @foreach ($families as $familia)
                              <tr>
                                <td>
                                  <a href="/families/{{ $familia->id }}">
                                      {{ $familia->nom}} 
                                  </a>                                  
                                </td>
                                <td>
                                  {{ $familia->nom_altres }}
                                </td>
                                <td>
                                  <a href="/families/{{ $familia->id }}/edit">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                  </a>
                                  {{ Form::open(['method' => 'DELETE', 'route' => ['families.destroy', $familia->id]]) }}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-warning']) }}
                                  {{ Form::close() }}
                                </td>
                              </tr>
                          @endforeach
                        </tbody>
                      </table>
                    @else
                    <h3>No hi ha families creades</h3>
                    @endif
                    <a class="btn btn-primary" href="/families/create/">
                      Afegir familia
                    </a>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
