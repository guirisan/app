@if (count($plagues_dropdown_data))
    <div class="form-group{{ $errors->has('plaga') ? ' has-error' : '' }}">
        {!! Form::label('plaga', 'plaga') !!}
        {!! Form::select('plaga',$plagues_dropdown_data, null, ['id' => 'plaga', 'class' => 'form-control', 'multiple' => 'multiple', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('plaga') }}</small>
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
