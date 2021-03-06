@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>Editar {{ $parcela->nom }} </strong> </div>

            <div class="panel-body">
                {!! Form::model($parcela, ['method' => 'PATCH', 'route' => ['parceles.update', $parcela->id] ]) !!}
                    @include('parcela._inputs', 
                        ['submitButtonText' => 'Editar parcela'],
                        ['resetButtonText' => 'Desfer canvis'])
                {!! Form::close() !!}

                </div>
        </div>
    </div>
</div>
@endsection
