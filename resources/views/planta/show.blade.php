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
              <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                {{-- images (carousel) --}}
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Imatges</h3>
                  </div>

                  <div class="panel-body">

                  @if (count($planta->images))
                    <div id="carousel-id" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        @php
                          $img_count = 0;
                        @endphp
                        
                        @foreach ($planta->images as $image)
                          @if ($img_count == 0)
                            <li data-target="#carousel-id" data-slide-to="{{ $image->id }}" class="active"></li>
                          @else
                            <li data-target="#carousel-id" data-slide-to="{{ $image->id }}" class=""></li>
                          @endif
                          
                          @php
                            $img_count++;
                          @endphp

                        @endforeach
                      </ol>


                      <div class="carousel-inner">
                        @php
                          $img_count = 0;
                        @endphp
                        
                        @foreach ($planta->images as $image)                        
                          @if ($img_count == 0)
                            <div class="item active">
                          @else
                            <div class="item">
                          @endif
                            <img  alt="{{ $image->nom }}" src="{{ $image->thumbnail_path }}">
                            <div class="container">
                              <div class="carousel-caption">

                                <h1>{{ $image->nom }}</h1>
                                <p>{{ $image->descripcio}}</p>

                                <div class="row">

                                  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xs-offset-8 col-sm-offset-8 col-md-offset-8 col-lg-offset-8">
                                    <a href="/images/{{ $image->id }}/edit" class="btn btn-warning">
                                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>                                    
                                  </div>
                                  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                    {{ Form::open([
                                      'method' => 'DELETE', 
                                      'route' => ['images.destroy', $image->id],
                                      'class' => 'form-inline']) 
                                    }}
                                      <div class="form-group">
                                        {{ Form::button(
                                          '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>', [
                                            'class' => 'btn btn-danger', 
                                            'type' => 'submit'
                                        ]) }}
                                      </div>
                                    {{ Form::close() }}
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          @php
                            $img_count++;
                          @endphp

                        @endforeach
                        
                        
                      </div>
                      <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                      <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                              
                  @else
                    <p>
                      No hi ha imatges de la planta
                    </p>
                  @endif

                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <a class="btn btn-success btn-lg" data-toggle="modal" href='#imageModal'>
                        <span class="glyphicon glyphicon-plus"></span>
                      </a>
                      <div class="modal fade" id="imageModal">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Afegir imatges</h4>
                            </div>
                            <div class="modal-body">

                              <form action="/images" class="dropzone" id="dropzone-images-planta">
                                {{ csrf_field() }}
                                <div class="hide form-group{{ $errors->has('imageable_type') ? ' has-error' : '' }}">
                                    <p>imageable_type</p>
                                    {!! Form::text('imageable_type', "App\Planta", ['class' => 'form-control', 'required' => 'required']) !!}
                                </div>

                                <div class="hide form-group{{ $errors->has('imageable_id') ? ' has-error' : '' }}">
                                    <p>imageable_id</p>
                                    {!! Form::text('imageable_id', $planta->id, ['class' => 'form-control', 'required' => 'required']) !!}
                                </div>

                              </form>

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
                
                {{-- plagues --}}
                <div class="panel panel-default">
                  <div class="panel-heading" data-toggle="collapse" data-target="#panel-plagues" aria-expanded="true" aria-controls="panel-plagues">
                    <h3 class="panel-title">Plagues</h3>
                  </div>
                  <div id="panel-plagues" class="panel-body">

                    @if (count($planta->plagues))
                      @foreach ($planta->plagues as $plaga)
                        <p>
                          <strong>

                               
                            <a 
                              class="btn btn-lg btn-danger" 
                              tabindex="0" 
                              role="button"
                              data-toggle="popover"
                              data-trigger="focus"
                              title="{{ $plaga->nom }}" 
                              data-html="true" 
                              data-content=
                              "<p> {{ $plaga->pivot->descripcio }} </p>
                              <p>
                                <a class='btn btn-primary btn-sm' href='/plagues/{{ $plaga->id }}'>
                                  Veure plaga
                                </a>
                                <a href="/plantes/{{ $planta->id }}/editPlaga/{{ $plaga->id }}">
                                  edit relation
                                </a>
                              </p>"

                              >
                          
                                {{ $plaga->nom }}

                            </a>

                          </strong>
                        </p>
                      @endforeach
                    @else
                      <p>
                        No hi ha plagues definides
                      </p>
                    @endif


                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <a class="btn btn-primary" data-toggle="modal" href='#modalCreatePlanta'>
                          <span class="glyphicon glyphicon-plus"></span>
                        </a>
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
                                  'route' => ['plantes.storePlaga', $planta->id]]) 
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
                
                {{-- tasques --}}
                <div class="panel panel-default">
                  <div class="panel-heading" data-toggle="collapse" data-target="#panel-tasques" aria-expanded="true" aria-controls="panel-tasques">
                    <h3 class="panel-title">Tasques</h3>
                  </div>
                  <div id="panel-tasques" class="panel-body">
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
              <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                
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
          </div> 
        </div>
    </div>
</div>

@endsection

