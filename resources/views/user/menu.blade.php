@extends('layouts-horizontalmenu-light.master')

@include('layout.header')
@section('css')

@endsection
@section('content')
  @include('layout.response')
 

<form  id="pedido">
  @csrf

  <div class="row">
      <div class="col-4" style="background-color: #905128">
        <img style="width: 100%; text-align: left;" src="{{URL::asset('assets/img/bg3.png')}}" alt="">
      </div>
      <div class="col-8">
        <div class="row">
          <div class="col-12 mt-5" style="text-align: center;">
              <h3>Listado del Menú del dia {{\Carbon\Carbon::parse(date(now()))->locale('es')->translatedFormat('j \d\e F \d\e Y') }}</h3>
          </div>
          <div class="row mt-5">
            <div aria-multiselectable="true" class="accordion" id="accordion" role="tablist">
              
              @foreach ($restaurante as $key => $val)
                <div class="card">
                  <div class="card-header" id="headingOne" role="tab">
                    <a aria-controls="collapseOne" aria-expanded="true" data-toggle="collapse" href="#collapseOne{{$val->id}}"> Menú Restaurante {{$val->nombre}}</a>
                  </div>
                  
                  <div aria-labelledby="headingOne" class="collapse" data-parent="#accordion" id="collapseOne{{$val->id}}" role="tabpanel">
                      <div class="row  m-1">
                      <div class="col-lg-6">
                        <h6>PRINCIPAL</h6>
                        <table>
                          <tbody>
                            @foreach ($menu as $key => $item)
                                @if ($item->tipo == 'Proteina' && $item->restaurante == $val->id)
                                <tr>
                                  <td><input onclick="actualiza_costo({{json_encode($item)}})" type="radio" name="proteina" value="{{$item->id}}" id="proteina[{{$key}}]"> <input type="hidden" name="fecha[{{$key}}]" id="fecha[{{$key}}]" value="{{$item->fecha}}"></td>
                                  <td  style="width: 60%">{{$item->nombre}}</td>
                                  <td>${{number_format($item->costo, 2)}}</td>
                                </tr>   
                                @endif
                            @endforeach
                          </tbody>
                        </table>
                      </div>

                      <div class="col-lg-6">
                        <h6>ACOMPAÑAMIENTOS</h6>
                        <table style="text-align:left">
                          <tbody>
                            @foreach ($acomp as $key => $item)
                              @if ($item->tipo == 'Acomp' && $item->restaurante == $val->id)
                              <tr>
                                <td><input type="checkbox" onclick="cantacomp('acomp[{{$key}}]')" value="{{$item->id}}" name="acomp[{{$key}}]" id="acomp[{{$key}}]"></td>
                                <td style="width: 60%">{{$item->nombre}}</td>
                                {{-- <input type="hidden" name="adc_acomp[{{$key}}]" id="adc_acomp[{{$key}}]" value="{{$item->costo}}"> --}}
                              </tr>   
                              @endif
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      <hr>
                      <div class="col-lg-6">
                        <h6>ADICIONALES</h6>
                        <table>
                          <tbody>
                            @foreach ($menucomp as $key => $item)
                             
                              @if ( $item->restaurante == $val->id)
                                <tr>
                                  <td  style="width: 60%"> <input class="ml-5" type="checkbox" value="{{$item->id}}" name="adicional[{{$key}}]" id="adicional[{{$key}}]">{{$item->nombre}} <span style="width: 60%; font-size: 12px; color:red"> + ${{number_format($item->costo_adicional, 2)}}</span> </td>
                                </tr>   
                              @endif
                            @endforeach
                          </tbody>
                        </table>
                        
                      </div>
                      <div class="col-lg-6">
                        <h5 class="col-md-10 col-form-label text-md form-check-label" for="flexRadioDefault2">Observ. Adicionales</h5>
                        <textarea class="form-control" name="coments" id="coments" cols="3" rows="5"></textarea>
                      </div>
                    </div>                  
                  </div>
                </div>
              @endforeach
            </div>
          </div>

          <div class="col-lg-6 mt-5">
						<a class="btn ripple btn-primary" data-target="#modal-datepicker" data-toggle="modal" href="">Agregar a Carrito</a>
          </div>
          <div class="col-lg-6 mt-5">
						<a class="btn ripple btn-success" data-target="#modal-datepicker1" data-toggle="modal" href="">Finalizar Orden</a>
          </div>

          <div class="modal" id="modal-datepicker">
            <div class="modal-dialog" role="document">
              <div class="modal-content modal-content-demo">
                <div class="modal-header">
                  <h6 class="modal-title">Orden</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <div class="col-12 mg-t-25">
                    <h5 for="">Orden</h5>
                    <div class="form-check mg-t-15">
                      <input onclick="ocultainp()" class="form-check-input" value="si" checked type="radio" name="orden_propia" id="orden_propia" checked>
                      <label class="form-check-label" for="flexRadioDefault1">
                        Propia
                      </label>
                    </div>
                    <div class="form-check mg-t-15">
                      <input onclick="muestrainp()" class="form-check-input" value="no" type="radio" name="orden_propia" id="orden_propia" >
                      <label class="form-check-label" for="flexRadioDefault2">
                        De alguien más
                      </label>
              
                      <input class="form-control" type="text" name="orden_d" id="orden_d" style="display:none">
                    </div>
                    
                  </div>
                  <input type="hidden" name="propia" id="propia">
                </div>
                <div class="modal-footer">
                  <button class="btn ripple btn-primary" onclick="agregar()"data-dismiss="modal"  type="button">Agregar al carrito</button>
                  <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                </div>
              </div>
            </div>
          </div>

          <div class="modal" id="modal-datepicker1">
            <div class="modal-dialog" role="document">
              <div class="modal-content modal-content-demo">
                <div class="modal-header">
                  <h6 class="modal-title">Orden</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <div class="col-12 mg-t-25">
                    <h5 for="">Orden</h5>
                    <div class="form-check mg-t-15">
                      <input onclick="ocultainp()" class="form-check-input" value="si"  type="radio" name="orden_propia" id="orden_propia" checked>
                      <label class="form-check-label" for="flexRadioDefault1">
                        Propia
                      </label>
                    </div>
                    <div class="form-check mg-t-15">
                      <input onclick="muestrainp()" class="form-check-input" value="no" type="radio" name="orden_propia" id="orden_propia" >
                      <label class="form-check-label" for="flexRadioDefault2">
                        De alguien más
                      </label>
              
                      <input class="form-control" type="text" name="orden_d" id="orden_d" style="display:none">
                    </div>
                    
                  </div>
                  <input type="hidden" name="propia" id="propia">
                </div>
                <div class="modal-footer">
                  <button class="btn ripple btn-primary" onclick="ordenardirecto()" data-dismiss="modal" type="button">Ordenar</button>
                  <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
     
  </div>
</form>

@endsection
@include('layout.script')