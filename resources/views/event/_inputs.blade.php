<div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
    {!! Form::text('user_id', auth()->user()->id, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<div class="form-group{{ $errors->has('parcela_id') ? ' has-error' : '' }}">
    {!! Form::label('parcela_id', 'parcela id') !!}
    {!! Form::text('parcela_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('parcela_id') }}</small>
</div>

<div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
    {!! Form::label('nom', 'Nom') !!}
    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('nom') }}</small>
</div>

<div class="form-group{{ $errors->has('data') ? ' has-error' : '' }}">
    {!! Form::label('data', 'Data') !!}
    {!! Form::date('data', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('data') }}</small>
</div>

<div class="form-group{{ $errors->has('fet') ? ' has-error' : '' }}">
    {!! Form::label('fet', 'Fet (1-0)') !!}
    {!! Form::text('fet', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('fet') }}</small>
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


