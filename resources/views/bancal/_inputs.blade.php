<div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
    {!! Form::text('user_id', auth()->user()->id, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
    {!! Form::label('nom', 'Nom') !!}
    {!! Form::text('nom', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('nom') }}</small>
</div>


<div class="form-group{{ $errors->has('nom_cientific') ? ' has-error' : '' }}">
    {!! Form::label('nom_cientific', 'Nom científic') !!}
    {!! Form::text('nom_cientific', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('nom_cientific') }}</small>
</div>

<div class="form-group{{ $errors->has('descripcio') ? ' has-error' : '' }}">
    {!! Form::label('descripcio', 'Descripcio') !!}
    {!! Form::textarea('descripcio', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('descripcio') }}</small>
</div>

<div class="form-group{{ $errors->has('sembra_ini') ? ' has-error' : '' }}">
    {!! Form::label('sembra_ini', 'Sembra desde') !!}
    {!! Form::date('sembra_ini', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('sembra_ini') }}</small>
</div>

<div class="form-group{{ $errors->has('sembra_fi') ? ' has-error' : '' }}">
    {!! Form::label('sembra_fi', 'Fins a') !!}
    {!! Form::date('sembra_fi', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('sembra_fi') }}</small>
</div>

<div class="form-group{{ $errors->has('sembra') ? ' has-error' : '' }}">
    {!! Form::label('sembra', 'Sembra') !!}
    {!! Form::textarea('sembra', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('sembra') }}</small>
</div>

<div class="form-group{{ $errors->has('cultiu') ? ' has-error' : '' }}">
    {!! Form::label('cultiu', 'Cultiu') !!}
    {!! Form::textarea('cultiu', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('cultiu') }}</small>
</div>

<div class="form-group{{ $errors->has('collita') ? ' has-error' : '' }}">
    {!! Form::label('collita', 'Collita') !!}
    {!! Form::textarea('collita', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('collita') }}</small>
</div>

<div class="form-group{{ $errors->has('familia_id') ? ' has-error' : '' }}">
    {!! Form::label('familia_id', 'Familia') !!}
    {!! Form::text('familia_id', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('familia_id') }}</small>
</div>

<div class="form-group{{ $errors->has('grup_id') ? ' has-error' : '' }}">
    {!! Form::label('grup_id', 'Grup') !!}
    {!! Form::text('grup_id', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('grup_id') }}</small>
</div>

<div class="btn-group pull-right">
    {!! Form::reset($resetButtonText, ['class' => 'btn btn-warning']) !!}
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-success']) !!}
</div>


