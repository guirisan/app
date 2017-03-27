@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>Afegir familia</strong> </div>

            <div class="panel-body">

            {!! Form::model(new App\Familia, ['method' => 'POST', 'route' => 'families.store']) !!}
                
                @include('familia._inputs')
                
            {!! Form::close() !!}

                {{-- <form action="/familias" method="POST" role="form" enctype="multipart/form-data">
                    
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form> --}}
            </div>


        </div>
    </div>
</div>
@endsection
