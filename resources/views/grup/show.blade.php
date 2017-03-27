@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>{{ $grup->nom }}</strong> </div>

            <div class="panel-body">
              <p>
                <strong>id:</strong> {{ $grup->id}}
              </p>
              <p>
                <strong>nom:</strong> {{ $grup->nom}}
              </p>
              <p>
                <strong>nom_altres:</strong> {{ $grup->nom_altres}} 
              </p>
              <p>
                <strong>descripcio:</strong> {{ $grup->descripcio}}
              </p>
            </div>


        </div>
    </div>
</div>

@endsection
