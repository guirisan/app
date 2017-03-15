@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Families</div>

                <div class="panel-body">
                    @if (count($families))
                        <ul>
                            @foreach ($families as $familia)
                                <li>
{{--                                     {{ $familia->nom}} - {{ $familia->sembra_ini->format('j - F')}}
 --}}
                                    {{ $familia->nom}}


                                 </li>
                            @endforeach
                        </ul>
                    @else
                    <h3>No hi ha families creades</h3>
                    @endif
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
