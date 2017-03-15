@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"> <strong>Editar {{ $planta->nom }} </strong> </div>

            <div class="panel-body">
              <form action="/plantes/{{ $planta->id }}/" method="POST" role="form">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="nom" class="col-sm-2">Nom</label>
                  <input type="text" name="nom" id="inputNom" class="form-control" value="{{ $planta->nom }}" required="required" title="nom">
                </div>

                <div class="form-group">
                  <label for="nom_cientific" class="col-sm-2">nom_cientific</label>
                  <input type="text" name="nom_cientific" id="inputnom_cientific" class="form-control" value="{{ $planta->nom_cientific }}" required="required" title="nom_cientific">
                </div>

                <div class="form-group">
                  <label for="descripcio" class="col-sm-2">descripcio</label>
                  <textarea name="descripcio" id="inputDescripcio" class="form-control" rows="5" >{{ $planta->descripcio}}</textarea>
                </div>

                <div class="form-group">
                  <label for="sembra_ini" class="col-sm-2">sembra_ini</label>
                  <input type="date" name="" id="input" class="form-control" value="{{ $planta->sembra_ini }}" required="required" title="">
                </div>

                <div class="form-group">
                  <label for="sembra_fi" class="col-sm-2">sembra_fi</label>
                  <input type="date" name="" id="input" class="form-control" value="" required="required" title="">
                </div>

                <div class="form-group">
                  <label for="sembra" class="col-sm-2">sembra</label>
                  <textarea name="sembra" id="inputSembra" class="form-control" rows="5" ></textarea>
                </div>

                <div class="form-group">
                  <label for="cultiu" class="col-sm-2">cultiu</label>
                  <textarea name="cultiu" id="inputCultiu" class="form-control" rows="5" ></textarea>
                </div>

                <div class="form-group">
                  <label for="collita" class="col-sm-2">collita</label>
                  <textarea name="collita" id="inputCollita" class="form-control" rows="5" ></textarea>
                </div>

                <div class="form-group">
                  <label for="grup_id" class="col-sm-2">grup</label>
                  <input type="text" name="grup_id" id="inputGrup_id" class="form-control" value="" required="required">
                </div>

                <div class="form-group">
                  <label for="familia" class="col-sm-2">familia</label>
                  <input type="text" name="familia_id" id="inputFamilia_id" class="form-control" value="" required="required">
                </div>



                <input type="text" name="id" id="inputId" class="form-control" value="{{ $planta->id }}" required="required">
                <input type="text" name="user_id" id="inputUser_id" class="form-control" value="{{ $planta->user->user_id }}" required="required">

                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>


        </div>
    </div>
</div>
@endsection
