@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>Afegir remei</strong> </div>

            <div class="panel-body">
            {!! Form::model(new App\Remei, ['method' => 'POST', 'route' => 'remeis.store', 'files' => true]) !!}
                
                @include('remei._inputs')
                
{{--                 <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
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
 --}}
            {!! Form::close() !!}
            </div>


        </div>
    </div>
</div>
@endsection
