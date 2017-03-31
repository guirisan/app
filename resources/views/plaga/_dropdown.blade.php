@if (count($plagues_dropdown_data))
    {!! Form::select('plaga', $plagues_dropdown_data, null, ['placeholder' => 'Plaga']) !!}
@endif
