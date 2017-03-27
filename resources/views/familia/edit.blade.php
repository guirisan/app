@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>Editar {{ $familia->nom }} </strong> </div>

            <div class="panel-body">
                {!! Form::model($familia, ['method' => 'PATCH', 'route' => ['families.update', $familia->id] ]) !!}
                    @include('familia._inputs')
                {!! Form::close() !!}

                </div>
        </div>
    </div>
</div>
@endsection
