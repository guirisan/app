@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"> 
              <div class="panel-title">
                <h3>
                  {{ $planta->nom }}
                  <small>
                    {{ $planta->nom_cientific }}
                  </small>
                  <span class="pull-right">
                    <a href="/plantes/{{ $planta->id }}/edit">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                  </span>
                </h3>
              </div>
            </div>

            <div class="panel-body">
            <div class="row">
              {{-- COLUMNA ESQUERRA --}}
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                {{-- images (carousel) --}}
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Imatges</h3>
                  </div>
                  <div class="panel-body">
                    <div id="carousel-id" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                        <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="item">
                          <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojN2E3YTdhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+Rmlyc3Qgc2xpZGU8L3RleHQ+PC9zdmc+">
                          <div class="container">
                            <div class="carousel-caption">
                              <h1>Example headline.</h1>
                              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNmE2YTZhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+U2Vjb25kIHNsaWRlPC90ZXh0Pjwvc3ZnPg==">
                          <div class="container">
                            <div class="carousel-caption">
                              <h1>Another example headline.</h1>
                              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                            </div>
                          </div>
                        </div>
                        <div class="item active">
                          <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
                          <div class="container">
                            <div class="carousel-caption">
                              <h1>One more for good measure.</h1>
                              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                      <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>

                  </div>
                </div>
                
                {{-- plagues --}}
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Plagues</h3>
                  </div>
                  <div class="panel-body">
                    <div class="panel-group" id="accordionPlagues" role="tablist" aria-multiselectable="true">
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionPlagues" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                              Mildiu
                            </a>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionPlagues" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Oidio
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionPlagues" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Aranya roja
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                    </div>    
                  </div>
                </div>
                
                {{-- tasques --}}
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Tasques</h3>
                  </div>
                  <div class="panel-body">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOnePlagues">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOneTasques" aria-expanded="false" aria-controls="collapseOneTasques">
                              Sembrar
                            </a>
                            <span class="pull-right">0</span>
                          </h4>
                        </div>
                        <div id="collapseOneTasques" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOnePlagues">
                          <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwoPlagues">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwoPlagues" aria-expanded="false" aria-controls="collapseTwoPlagues">
                              Repicar
                            </a>
                            <span class="pull-right">10</span>
                          </h4>
                        </div>
                        <div id="collapseTwoPlagues" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwoPlagues">
                          <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThreePlagues">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThreePlagues" aria-expanded="false" aria-controls="collapseThreePlagues">
                                Trasplantar
                            </a>
                            <span class="pull-right">30</span>
                          </h4>
                        </div>
                        <div id="collapseThreePlagues" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThreePlagues">
                          <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                    </div>    
                  </div>
                </div>
                
              </div>

              {{-- COLUMNA DRETA --}}
              <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                
                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    {{-- grup     --}}

                    @include('planta._attribute', 
                        ['name' => 'grup'],
                        ['value' => $planta->grup->nom])
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    {{-- familia --}}
                    @include('planta._attribute', 
                        ['name' => 'familia'],
                        ['value' => $planta->familia->nom])

                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    {{-- sembra_ini     --}}
                    @include('planta._attribute', 
                        ['name' => 'sembra_ini'],
                        ['value' => $planta->sembra_ini])
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    {{-- sembra_fi   --}}
                    @include('planta._attribute', 
                        ['name' => 'sembra_fi'],
                        ['value' => $planta->sembra_fi])
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    {{-- descripcio --}}  
                    @include('planta._attribute', 
                        ['name' => 'descripcio'],
                        ['value' => $planta->descripcio])
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    {{-- sembra --}}  
                    @include('planta._attribute', 
                        ['name' => 'sembra'],
                        ['value' => $planta->sembra])

                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    {{-- cultiu --}}  
                    @include('planta._attribute', 
                        ['name' => 'cultiu'],
                        ['value' => $planta->cultiu])

                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    {{-- collita --}}  
                    @include('planta._attribute', 
                        ['name' => 'collita'],
                        ['value' => $planta->collita])
                  </div>
                </div>
              </div>
            </div>
              
            @if (count($planta->images))
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>nom</th>
                    <th>descripcio</th>
                    <th>imatge</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($planta->images as $image)
                  <tr>
                    <td>{{ $image->nom }}</td>
                    <td>{{ $image->descripcio }}</td>
                    <td><img src="{{ $image->url }}"></td>
                  </tr>

                @endforeach
                </tbody>
              </table>                
            @else
              <p>
                No hi ha imatges de la planta
              </p>
            @endif

            <div class="row">
              <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                
                <form action="/images" class="dropzone" id="my-awesome-dropzone">
                  {{ csrf_field() }}
                  <div class="form-group{{ $errors->has('imageable_type') ? ' has-error' : '' }}">
                      <p>imageable_type</p>
                      {!! Form::text('imageable_type', "App\Planta", ['class' => 'form-control', 'required' => 'required']) !!}
                  </div>

                  <div class="form-group{{ $errors->has('imageable_id') ? ' has-error' : '' }}">
                      <p>imageable_id</p>
                      {!! Form::text('imageable_id', $planta->id, ['class' => 'form-control', 'required' => 'required']) !!}
                  </div>

                </form>
              </div>
            </div>

            <a class="btn btn-primary" data-toggle="modal" href='#modalCreateImage'>Afegir imatge</a>
            <div class="modal fade" id="modalCreateImage">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Afegir imatge</h4>
                  </div>
                  <div class="modal-body">
                    {!! Form::model(new App\Image, ['method' => 'POST', 'route' => 'images.store', 'files' => true, 'class' => 'dropzone']) !!}
                      @include('image._inputs', 
                          ['imageable_type' => 'App\Planta'],
                          ['imageable_id' => $planta->id ],
                          ['submitButtonText' => 'Guardar imatge' ])
                    {{ Form::close() }}

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>


            <h3>plagues</h3>

            @if (count($planta->plagues))
              @foreach ($planta->plagues as $plaga)
                <a href="/plaga/{{ $plaga->id }}">
                  {{ $plaga->nom }}
                </a>
              @endforeach
            @else
              <p>no hi ha plagues associades</p>
            @endif
            <a class="btn btn-primary" data-toggle="modal" href='#modalCreatePlanta'>Afectada per...</a>
            <div class="modal fade" id="modalCreatePlanta">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Afegir plaga</h4>
                  </div>
                  <div class="modal-body">
                    {!! Form::open([
                      'method' => 'POST',
                      'route' => ['plagues.storePlanta', $planta->id]]) 
                    !!}
                      @include('plaga._dropdown', 
                          ['submitButtonText' => 'Guardar afectada' ],
                          ['resetButtonText' => 'Buidar' ])
                    {!! Form::close() !!}
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tanca</button>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
    </div>
</div>

@endsection
