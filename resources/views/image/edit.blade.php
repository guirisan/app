@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>Editar imatge </strong> </div>

            <div class="panel-body">
                {!! Form::model($image, [
                    'method'    => 'PATCH', 
                    'route'     => ['images.update', $image->id], ]) 
                !!}
                    @include('image._inputs',
                        ['path'             => '/' . $image->thumbnail_path],
                        ['submitButtonText' => 'Editar imatge'],
                        ['resetButtonText'  => 'Desfer canvis'])
                {!! Form::close() !!}

                </div>
        </div>
    </div>
</div>
@endsection
