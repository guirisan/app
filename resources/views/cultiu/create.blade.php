@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>Afegir cultiu</strong> </div>

            <div class="panel-body">
            {!! Form::model(new App\Cultiu, ['method' => 'POST', 'route' => 'cultius.store']) !!}
                
                @include('cultiu._inputs', 
                    ['submitButtonText' => 'Crear cultiu'],
                    ['resetButtonText' => 'Buidar'])
            {!! Form::close() !!}
            </div>


        </div>
    </div>
</div>
@endsection
