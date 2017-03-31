@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">Dashboard</div>

            <div class="panel-body">
                <form action="/error" method="post" class="dropzone"></form>
                <a href="/plantes/"><h2>Plantes</h2></a>
                <a href="/grups/"><h3>Grups</h3></a>
                <a href="/families/"><h3>Families</h3></a>
                <a href="/plagues/"><h2>Plagues</h2></a>
                <a href="/remeis/"><h2>Remeis</h2></a>
                <hr>
                <a href="/bancals/"><h2>Bancals</h2></a>
                <a href="/parceles/"><h2>Parceles</h2></a>

            </div>


        </div>
    </div>
</div>
@endsection
