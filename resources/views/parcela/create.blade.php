@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>Afegir parcela</strong> </div>

            <div class="panel-body">
            {!! Form::model(new App\Parcela, ['method' => 'POST', 'route' => 'parceles.store', 'files' => true]) !!}
                
                @include('parcela._inputs', 
                    ['submitButtonText' => 'Crear parcela'],
                    ['resetButtonText' => 'Buidar'])
            {!! Form::close() !!}
            </div>


        </div>
    </div>
</div>
@endsection
