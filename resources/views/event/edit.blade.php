@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>Editar {{ $event->nom }} </strong> </div>

            <div class="panel-body">
                {!! Form::model($event, ['method' => 'PATCH', 'route' => ['events.update', $event->id] ]) !!}
                    @include('event._inputs', 
                        ['submitButtonText' => 'Editar event'],
                        ['resetButtonText' => 'Desfer canvis'])
                {!! Form::close() !!}

                </div>
        </div>
    </div>
</div>
@endsection
