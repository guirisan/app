@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Events</div>

                <div class="panel-body">

                    @if (count($events))
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>id</th>
                              <th>parcela</th>
                              <th>nom</th>
                              <th>data</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            
                            @foreach ($events as $event)
                              <tr>
                                <td>
                                  <a href="/events/{{ $event->id }}">
                                      {{ $event->id}} 
                                  </a>                                  
                                </td>
                                <td>
                                  {{ $event->parcela_id }}
                                </td>
                                <td>
                                  {{ $event->nom }}
                                </td>
                                <td>
                                  {{ $event->data }}
                                </td>
                                <td>
                                  <a href="/events/{{ $event->id }}/edit">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                  </a>
                                  {{ Form::open(['method' => 'DELETE', 'route' => ['events.destroy', $event->id]]) }}
                                        {{ Form::button('<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>', ['class' => 'btn-link', 'type' => 'submit']) }}
                                  {{ Form::close() }}
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>

                    @else
                      <h3>No hi ha events creades</h3>
                    @endif
                    <a class="btn btn-primary" href="/events/create/">
                      Afegir event
                    </a>

                </div>


            </div>
        </div>
    </div>
</div>
@endsection
