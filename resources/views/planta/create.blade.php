@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>Afegir planta</strong> </div>

            <div class="panel-body">

            {!! Form::model($planta, ['method' => 'POST', 'route' => 'plantes', 'files' => true]) !!}
                <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                    {!! Form::label('user_id', 'user id FOR DEBUG') !!}
                    {!! Form::text('user_id', 1, ['class' => 'form-control', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('user_id') }}</small>
                </div>
                @include('planta.inputs')
                
                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                    {!! Form::label('image', 'Foto') !!}
                    {!! Form::file('image') !!}
                    <p class="help-block">Help block text</p>
                    <small class="text-danger">{{ $errors->first('image') }}</small>
                </div>

                <div class="form-group{{ $errors->has('image_descripcio') ? ' has-error' : '' }}">
                    {!! Form::label('image_descripcio', 'Descripció de la imatge') !!}
                    {!! Form::textarea('image_descripcio', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('image_descripcio') }}</small>
                </div>

            {!! Form::close() !!}

                {{-- <form action="/plantes" method="POST" role="form" enctype="multipart/form-data">
                    
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form> --}}
            </div>


        </div>
    </div>
</div>
@endsection
