@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>Afegir plaga</strong> </div>

            <div class="panel-body">
            {!! Form::model(new App\Plaga, ['method' => 'POST', 'route' => 'plagues.store', 'files' => true]) !!}
                
                @include('plaga._inputs', 
                    ['submitButtonText' => 'Crear plaga'],
                    ['resetButtonText' => 'Buidar']
                )

            {!! Form::close() !!}
            </div>


        </div>
    </div>
</div>
@endsection
