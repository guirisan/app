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

<div class="form-group{{ $errors->has('preparacio') ? ' has-error' : '' }}">
    {!! Form::label('preparacio', 'Preparacio') !!}
    {!! Form::textarea('preparacio', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('preparacio') }}</small>
</div>

<div class="form-group{{ $errors->has('aplicacio') ? ' has-error' : '' }}">
    {!! Form::label('aplicacio', 'Aplicacio') !!}
    {!! Form::textarea('aplicacio', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('aplicacio') }}</small>
</div>

<div class="btn-group pull-right">
    {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
    {!! Form::submit("Save", ['class' => 'btn btn-success']) !!}
</div>


