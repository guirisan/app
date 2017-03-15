@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>Afegir planta</strong> </div>

            <div class="panel-body">
              <form action="/plantes" method="POST" role="form">
                @include('planta.inputs')
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>


        </div>
    </div>
</div>
@endsection
