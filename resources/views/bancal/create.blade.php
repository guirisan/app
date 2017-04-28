@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>Afegir bancal</strong> </div>

            <div class="panel-body">
            {!! Form::model(new App\Bancal, ['method' => 'POST', 'route' => 'bancals.store', 'files' => true]) !!}
                
                @include('bancal._inputs', 
                    ['submitButtonText' => 'Crear bancal'],
                    ['resetButtonText' => 'Buidar'])
            {!! Form::close() !!}
            </div>


        </div>
    </div>
</div>
@endsection
