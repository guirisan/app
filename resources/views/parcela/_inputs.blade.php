<div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
    {!! Form::text('user_id', auth()->user()->id, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<div class="form-group{{ $errors->has('bancal_id') ? ' has-error' : '' }}">
    {!! Form::label('bancal_id', 'Bancal id') !!}
    {!! Form::text('bancal_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('bancal_id') }}</small>
</div>

<div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
    {!! Form::label('nom', 'Nom') !!}
    {!! Form::text('nom', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('nom') }}</small>
</div>

<div class="form-group{{ $errors->has('descripcio') ? ' has-error' : '' }}">
    {!! Form::label('descripcio', 'Descripcio') !!}
    {!! Form::textarea('descripcio', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('descripcio') }}</small>
</div>

<div class="form-group{{ $errors->has('superficie') ? ' has-error' : '' }}">
    {!! Form::label('superficie', 'Superficie (m2)') !!}
    {!! Form::text('superficie', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('superficie') }}</small>
</div>


<div class="form-group{{ $errors->has('ocupada') ? ' has-error' : '' }}">
    {!! Form::label('ocupada', 'Ocupada (0, 1)') !!}
    {!! Form::text('ocupada', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('ocupada') }}</small>
</div>

<div class="btn-group pull-right">
    {!! Form::reset($resetButtonText, ['class' => 'btn btn-warning']) !!}
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-success']) !!}
</div>


