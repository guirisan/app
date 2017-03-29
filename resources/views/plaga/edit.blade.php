@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>Editar {{ $planta->nom }} </strong> </div>

            <div class="panel-body">
                {!! Form::model($planta, ['method' => 'PATCH', 'route' => ['plantes.update', $planta->id] ]) !!}
                    @include('planta._inputs')
                {!! Form::close() !!}

                </div>
        </div>
    </div>
</div>
@endsection
