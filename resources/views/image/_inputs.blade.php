<div class="form-group{{ $errors->has('imageable_type') ? ' has-error' : '' }}">
    <p>imageable_type</p>
    {!! Form::text('imageable_type', $imageable_type, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<div class="form-group{{ $errors->has('imageable_id') ? ' has-error' : '' }}">
    <p>imageable_id</p>
    {!! Form::text('imageable_id', $imageable_id, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
    <p>user_id</p>
    {!! Form::text('user_id', auth()->user()->id, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
    {!! Form::label('file', 'Foto') !!}
    {!! Form::file('file') !!}
    <p class="help-block">Help block text</p>
    <small class="text-danger">{{ $errors->first('file') }}</small>
</div>

<div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
    {!! Form::label('nom', 'Nom') !!}
    {!! Form::text('nom', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('nom') }}</small>
</div>  

<div class="form-group{{ $errors->has('image_descripcio') ? ' has-error' : '' }}">
    {!! Form::label('image_descripcio', 'Descripció de la imatge') !!}
    {!! Form::textarea('image_descripcio', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('image_descripcio') }}</small>
</div>


<div class="btn-group pull-right">
    {!! Form::submit('enviar', ['class' => 'btn btn-success']) !!}
</div>
