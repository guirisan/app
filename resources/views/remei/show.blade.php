 @extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>{{ $remei->nom }}</strong> </div>

            <div class="panel-body">


              <p>
                <strong>id:</strong> {{ $remei->id}}
              </p>
              <p>
                <strong>nom:</strong> {{ $remei->nom}}
              </p>
              <p>
                <strong>nom_cientific:</strong> {{ $remei->nom_cientific}} 
              </p>
              <p>
                <strong>descripcio:</strong> {{ $remei->descripcio}}
              </p>
              <p>
                <strong>preparacio:</strong> {{ $remei->preparacio}}
              </p>
              <p>
                <strong>aplicacio:</strong> {{ $remei->aplicacio}}
              </p>
              <p>
                <strong>user_id:</strong> {{ $remei->user_id}} 
              </p>
              @if (count($remei->images))
                <p> 
                  <strong>foto:</strong> <img src="{{ $remei->images->first()->url }}">
                </p>
              @endif 

            </div>


        </div>
    </div>
</div>

@endsection
