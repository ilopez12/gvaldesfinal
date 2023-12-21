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
          <div class="col-12" style="text-align: center;">
              <h3>Menú del dia {{\Carbon\Carbon::parse(date(now()))->locale('es')->translatedFormat('j \d\e F \d\e Y') }}</h3>
          </div>
          <div class="col-12 mg-t-15" style="text-align: left;">
            <h4>Seleccione Pedido</h4>
          </div>
          {{-- <div class="col-2">
            <label for="">Cantidad </label>
            <input type="number" class="form-control" name="cant" id="cant">
          </div> --}}
          {{-- <div class="col-1">
            <input type="checkbox" name="proteina" id="proteina">
          </div>
          <div class="col-1">
            <p>Pollo</p>
          </div>
          <div class="col-3">
            <p>B/ 5.00</p>
          </div> --}}
          {{-- <div class="col-3">
            <input type="number" class="form-control" name="cant2" id="cant2">
          </div> --}}
          <div class="col-9 mg-t-15">
            <table>
              <tbody>
                @foreach ($menu as $key => $item)
                    @if ($item->tipo == 'Proteina')
                    <tr>
                      <td><input onclick="actualiza_costo({{json_encode($item)}})" type="radio" name="proteina" value="{{$item->id}}" id="proteina[{{$key}}]"></td>
                      <td  style="width: 60%">{{$item->nombre}}</td>
                      <td>${{number_format($item->costo, 2)}}</td>
                      {{-- <td><input type="number" class="form-control" name="cant2[{{$key}}]" id="cant2[{{$key}}]"></td> --}}
                    </tr>   
                    @endif
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="col-3" style="text-align: left;">
            <label for="">Cantidad </label>
            <input type="number" class="form-control  mg-r-5" value="1" name="cant" id="cant">
            <input type="hidden" name="costo_p" id="costo_p">
            <input type="hidden" name="costo_ad" id="costo_ad">
          </div>
          </div>
          <div class="col-12 mg-t-20" style="text-align: left;">
            <h4>Seleccione  Acompañamientos</h4>
          </div>
            <div class="col-12" style="text-align:left">
             
              <table style="text-align:left">
                <thead>
                  <tr>
                    <th colspan="2"></th>
                    {{-- <th>Costo por adicional</th> --}}
                  </tr>
                </thead>
                <tbody>
                  @foreach ($acomp as $key => $item)
                  @if ($item->tipo == 'Acomp')
                  <tr>
                    <td><input type="checkbox"  value="{{$item->id}}" name="acomp[{{$key}}]" id="acomp[{{$key}}]"></td>
                    {{-- <td style="width: 60%">{{$item->nombre}}</td> --}}
                    <td>${{number_format($item->costo, 2)}}</td>
                    <td><input type="number" value="1" class="form-control" name="cantA[{{$key}}]" id="cantA{{$key}}"></td>
                    <input type="hidden" name="adc_acomp[{{$key}}]" id="adc_acomp[{{$key}}]" value="{{$item->costo}}">
                  </tr>   
                  @endif
                @endforeach
                </tbody>
              </table>
            </div>
            {{-- <div class="col-12"> --}}
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
              <div class="col-8 mg-t-25">
                <h5 class="col-md-10 col-form-label text-md form-check-label" for="flexRadioDefault2">Datos Adicionales</h5>
                <textarea class="form-control" name="coments" id="coments" cols="3" rows="5"></textarea>
              </div>
              <div class="col-6 mg-t-30">
                <a class="btn btn-secondary" onclick="agregar()">Agregar otra orden</a>
              </div>
              <div class="col-6 m-t-15">
                <a class="btn btn-success" onclick="ordenar()" type="submit">Ordenar</a>
              </div>
            {{-- </div> --}}
        </div>
        
      </div>
     
  </div>
{{-- <div class="row align-items-center mg-t-20">
    <div class="col-2">

    </div>
    <div class="col-5">
        <div class="row">
            <h3 for="" > Proteína</h3>
              @foreach ($menu as $key => $item) 
                @if ($item->tipo == 'Proteina')
                <div class="input-group m-15 p-2">
                  <div class="input-group-text">
                    <input onclick="muestra({{$item->costo}})" class="form-check-input mt-0" type="radio" value="{{$item->nombre}}" aria-label="Radio button for following text input" name="proteina[0]" id="proteina0[0]">
                  </div>
                  <input type="text" value="{{$item->nombre}} - B/.{{$item->costo}}" readonly class="form-control" aria-label="Text input with radio button">
                  <input type="hidden" value="{{$item->costo}}" name="costo">
                  <input type="hidden" value="0.00" name="costo_adicional">
                </div> 
                @endif              
              @endforeach
        </div>
     
    </div>

    <div class="col-5" id="acomp" style="display: none">
      <h3> Acompañamiento</h3>

      @foreach ($menu as $key => $item)
        @if ($item->tipo == 'Acomp')
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="{{$item->nombre}}" name="acp[{{$key}}]" id="acp[{{$key}}]">
          <label class="form-check-label" for="flexCheckIndeterminate">
            {{$item->nombre}}
          </label>
        </div> 
        @endif
      @endforeach
        
        
    </div>
    <div class="col-6">
      <h5 for="">Orden</h5>
      <div class="form-check">
        <input onclick="ocultainp()" class="form-check-input" value="si" type="radio" name="tipo_orden" id="propia" checked>
        <label class="form-check-label" for="flexRadioDefault1">
          Propia
        </label>
      </div>
      <div class="form-check">
        <input onclick="muestrainp()" class="form-check-input" value="no" type="radio" name="tipo_orden" id="nopropia" >
        <label class="form-check-label" for="flexRadioDefault2">
          De alguien más
        </label>

        <input class="form-control" type="text" name="orden_d" id="orden_d" style="display:none">
      </div>
      
    </div>
    <div class="col-8">
      <h5 class="col-md-10 col-form-label text-md form-check-label" for="flexRadioDefault2">Datos Adicionales</h5>
      <textarea class="form-control" name="coments" id="coments" cols="3" rows="5"></textarea>
    </div>
    <div class="col-6 mg-t-30">
      <a class="btn btn-secondary" onclick="agregar()">Agregar otra orden</a>
    </div>
    <div class="col-6 m-t-15">
      <button class="btn btn-success" type="submit">Ordenar</button>
    </div>
    <div style="text-align: left">

    </div>
</div> --}}

</form>

@endsection
@include('layout.script')