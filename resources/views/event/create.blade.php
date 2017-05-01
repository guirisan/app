@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading"> 
                <strong>Afegir event</strong>
            </div>

            <div class="panel-body">
                {!! Form::model(new App\Event, ['method' => 'POST', 'route' => 'events.store']) !!}
                    
                    @include('event._inputs', 
                        ['submitButtonText' => 'Crear event'],
                        ['resetButtonText' => 'Buidar'])
                {!! Form::close() !!}
            </div>


        </div>
    </div>
</div>
@endsection
