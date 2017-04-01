@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>Editar {{ $plaga->nom }} </strong> </div>

            <div class="panel-body">
                {!! Form::model($plaga, ['method' => 'PATCH', 'route' => ['plagues.update', $plaga->id] ]) !!}
                    @include('plaga._inputs')
                {!! Form::close() !!}

                </div>
        </div>
    </div>
</div>
@endsection
