@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>Editar {{ $remei->nom }} </strong> </div>

            <div class="panel-body">
                {!! Form::model($remei, ['method' => 'PATCH', 'route' => ['remeis.update', $remei->id] ]) !!}
                    @include('remei._inputs')
                {!! Form::close() !!}

                </div>
        </div>
    </div>
</div>
@endsection
