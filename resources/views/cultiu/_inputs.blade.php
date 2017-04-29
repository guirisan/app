<div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
    {!! Form::text('user_id', auth()->user()->id, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<div class="form-group{{ $errors->has('planta_id') ? ' has-error' : '' }}">
    {!! Form::label('planta_id', 'planta id') !!}
    {!! Form::text('planta_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('planta_id') }}</small>
</div>

<div class="form-group{{ $errors->has('parcela_id') ? ' has-error' : '' }}">
    {!! Form::label('parcela_id', 'parcela id') !!}
    {!! Form::text('parcela_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('parcela_id') }}</small>
</div>

<div class="form-group{{ $errors->has('data_ini') ? ' has-error' : '' }}">
    {!! Form::label('data_ini', 'Desde') !!}
    {!! Form::date('data_ini', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('sembra_ini') }}</small>
</div>

<div class="form-group{{ $errors->has('data_fi') ? ' has-error' : '' }}">
    {!! Form::label('data_fi', 'Fins a') !!}
    {!! Form::date('data_fi', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('sembra_fi') }}</small>
</div>

<div class="form-group{{ $errors->has('descripcio') ? ' has-error' : '' }}">
    {!! Form::label('descripcio', 'Descripcio') !!}
    {!! Form::textarea('descripcio', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('descripcio') }}</small>
</div>

<div class="btn-group pull-right">
    {!! Form::reset($resetButtonText, ['class' => 'btn btn-warning']) !!}
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-success']) !!}
</div>


