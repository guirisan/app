@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>Editar {{ $planta->nom }} </strong> </div>

            <div class="panel-body">
                {!! Form::model($planta, ['method' => 'PUT', 'route' => ['plantes.edit', $planta] ]) !!}
                
                <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                    {!! Form::label('user_id', 'user_id') !!}
                    {!! Form::text('user_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('user_id') }}</small>
                </div>

                @include('planta.inputs')
              
                {!! Form::close() !!}

                </div>
        </div>
    </div>
</div>
@endsection
