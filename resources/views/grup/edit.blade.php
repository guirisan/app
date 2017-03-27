@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>Editar {{ $grup->nom }} </strong> </div>

            <div class="panel-body">
                {!! Form::model($grup, ['method' => 'PATCH', 'route' => ['grups.update', $grup->id] ]) !!}
                    @include('grup._inputs')
                {!! Form::close() !!}

                </div>
        </div>
    </div>
</div>
@endsection
