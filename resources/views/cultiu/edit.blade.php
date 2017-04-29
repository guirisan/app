@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>Editar {{ $cultiu->nom }} </strong> </div>

            <div class="panel-body">
                {!! Form::model($cultiu, ['method' => 'PATCH', 'route' => ['cultius.update', $cultiu->id] ]) !!}
                    @include('cultiu._inputs', 
                        ['submitButtonText' => 'Editar cultiu'],
                        ['resetButtonText' => 'Desfer canvis'])
                {!! Form::close() !!}

                </div>
        </div>
    </div>
</div>
@endsection
