@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>Afegir grup</strong> </div>

            <div class="panel-body">

            {!! Form::model(new App\Grup, ['method' => 'POST', 'route' => 'grups.store']) !!}
                
                @include('grup._inputs')
                
            {!! Form::close() !!}

                {{-- <form action="/grups" method="POST" role="form" enctype="multipart/form-data">
                    
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form> --}}
            </div>


        </div>
    </div>
</div>
@endsection
