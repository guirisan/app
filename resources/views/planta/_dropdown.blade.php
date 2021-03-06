@if (count($plantes_dropdown_data))
    <div class="form-group{{ $errors->has('planta') ? ' has-error' : '' }}">
        {!! Form::label('planta', 'Planta') !!}
        {!! Form::select('planta',$plantes_dropdown_data, null, ['id' => 'planta', 'class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('planta') }}</small>
    </div>

    <div class="form-group{{ $errors->has('descripcio') ? ' has-error' : '' }}">
        {!! Form::label('descripcio', 'Detalls') !!}
        {!! Form::textarea('descripcio', null, ['class' => 'form-control']) !!}
        <small class="text-danger">{{ $errors->first('descripcio') }}</small>
    </div>

    <div class="btn-group pull-right">
        {!! Form::reset($resetButtonText, ['class' => 'btn btn-warning']) !!}
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-success']) !!}
    </div>
@endif
