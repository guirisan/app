@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>{{ $familia->nom }}</strong> </div>

            <div class="panel-body">
              <p>
                <strong>id:</strong> {{ $familia->id}}
              </p>
              <p>
                <strong>nom:</strong> {{ $familia->nom}}
              </p>
              <p>
                <strong>nom_altres:</strong> {{ $familia->nom_altres}} 
              </p>
              <p>
                <strong>descripcio:</strong> {{ $familia->descripcio}}
              </p>

            </div>


        </div>
    </div>
</div>

@endsection
