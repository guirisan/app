
<div class="hide form-group{{ $errors->has('id') ? ' has-error' : '' }}">
    <p>id</p>
    {!! Form::text('id', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<div class="form-group">
    <img class="center-block" src="{{ $path }}">
</div>
<div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
    {!! Form::label('nom', 'Nom') !!}
    {!! Form::text('nom', null, [
        'class' => 'form-control' ]) 
    !!}
    <small class="text-danger">{{ $errors->first('nom') }}</small>
</div>  

<div class="form-group{{ $errors->has('descripcio') ? ' has-error' : '' }}">
    {!! Form::label('descripcio', 'Descripció de la imatge') !!}
    {!! Form::textarea('descripcio', null, [
        'class' => 'form-control'])
    !!}
    <small class="text-danger">{{ $errors->first('descripcio') }}</small>
</div>


<div class="btn-group pull-right">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
</div>
