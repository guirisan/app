@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Grups</div>

                <div class="panel-body">
                    @if (count($grups))
                        <ul>
                            @foreach ($grups as $grup)
                                <li>
{{--                                     {{ $grup->nom}} - {{ $grup->sembra_ini->format('j - F')}}
 --}}
                                    {{ $grup->nom}}


                                 </li>
                            @endforeach
                        </ul>
                    @else
                    <h3>No hi ha grups creades</h3>
                    @endif
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
