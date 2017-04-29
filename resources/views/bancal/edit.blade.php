@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>Editar {{ $bancal->nom }} </strong> </div>

            <div class="panel-body">
                {!! Form::model($bancal, ['method' => 'PATCH', 'route' => ['bancals.update', $bancal->id] ]) !!}
                    @include('bancal._inputs', 
                        ['submitButtonText' => 'Editar bancal'],
                        ['resetButtonText' => 'Desfer canvis'])
                {!! Form::close() !!}

                </div>
        </div>
    </div>
</div>
@endsection
