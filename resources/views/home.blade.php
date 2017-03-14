@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (count($plantes))
                        <h2>Plantes</h2>
                        <ul>
                            @foreach ($plantes as $planta)
                                <li>
{{--                                     {{ $planta->nom}} - {{ $planta->sembra_ini->format('j - F')}}
 --}}
                                    {{ $planta->nom}} - {{ $planta->sembra_ini }}


                                 </li>
                            @endforeach
                        </ul>
                    @endif  
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
