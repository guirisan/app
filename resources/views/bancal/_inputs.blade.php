<div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
    {!! Form::text('user_id', auth()->user()->id, ['class' => 'form-control', 'required' => 'required']) !!}
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
    {!! Form::label('superficie', 'Familia') !!}
    {!! Form::text('superficie', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('superficie') }}</small>
</div>

<div class="btn-group pull-right">
    {!! Form::reset($resetButtonText, ['class' => 'btn btn-warning']) !!}
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-success']) !!}
</div>


