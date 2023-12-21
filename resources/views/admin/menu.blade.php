@extends('layouts-verticalmenu-light.menumaestro')


@section('css')
@endsection
@section('content')
    @include('layout.response')

<h3>Menu del Día</h3>
<form action="{{url('admin/save')}}" method="post">
    <div class="row">
            @csrf
        <div class="col-6">
            <h5>Principal <span onclick="agregaprot()"  id="basic-addon2"></span></h5>
        </div>

        <div class="col-6">
            <a onclick="agregaprot()" class="btn btn-success" style="color: white"><strong>Agregar Principal</strong></a>
        </div>
        <div class="col-12">
            <input type="hidden" id="numero" name="numero" value="0">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Costo</th>
                        <th>Presa Adicional</th>
                        <th>Lugar</th>
                        <th>Cant. Acomp</th>
                        <th>Tipo Comida</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="items">
                    <tr>
                        <td id="p[0]"style="width: 30%"><input type="text" class="form-control" name="proteina[0]" id="proteina[0]" aria-label="Recipient's username" aria-describedby="basic-addon2"></td>
                        <td id="p[0]"><input type="text" class="form-control" name="costo[0]" id="costo[0]" aria-label="Recipient's username" aria-describedby="basic-addon2"></td>
                        <td id="a[0]"><input type="text" class="form-control" name="adicionalP[0]" id="adicionalP[0]" aria-label="Recipient's username" aria-describedby="basic-addon2"></td>
                        <td id="l[0]">
                            <select class="form-control" name="lugar[0]" id="lugar[0]">
                                <option value="1">Rest. Nuevo</option>
                                <option value="2">Rest. Nuevo2</option>
                            </select>
                        </td>
                        <td id="cc[0]"><input type="number" class="form-control" name="cantacomp[0]" id="cantacomp[0]" value="3" aria-describedby="basic-addon2"></td>
                        <td id="t[0]">
                            <select class="form-control" name="tipo[0]" id="tipo[0]" onchange="verificafecha()">
                                <option value="1">COMIDA COMPLETA</option>
                                <option value="2">SOPA</option>
                                <option value="3">GUACHO</option>
                                <option value="4">LASAGNA</option>
                                <option value="5">POSTRE</option>
                            </select>
                            <input type="hidden" value="SI" name="incluir['0']"  id="incluir['0']">
                        </td>
                        <td><a onclick="deleteprot(0)" class="btn btn-success" style="color: white"><i class="fe fe-x-circle"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col-6 mg-t-50" id="acompan" onclick="muestraacomp()">
            <h5>Agregar Acopañamientos</h5>
            
        </div>
        <div class="col-6 mg-t-50">
            <a onclick="agregaacomp()" class="btn btn-success" style="color: white"><strong>Agregar Acompd.</strong></a>
        </div>
        <div class="col-12" id="mostrar" >
            <input type="hidden" id="numeroA" name="numeroA" value="0">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        {{-- <th>Costo</th> --}}
                        <th>Orden Adicional</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="items2">
                    <tr>
                        <td id="a2[0]" style="width: 60%"><input type="text" class="form-control" name="acomp[0]" id="acomp[0]" aria-label="Recipient's username" aria-describedby="basic-addon2"></td>
                        <td id="c2[0]"><input type="text" class="form-control" name="adicionalA[0]" id="adicionalA[0]" aria-label="Recipient's username" aria-describedby="basic-addon2"></td>
                        
                        <td id="l2[0]">
                            <select class="form-control" name="lugar2[0]" id="lugar2[0]">
                                <option value="1">Rest. Nuevo</option>
                                <option value="2">Rest. Nuevo2</option>
                            </select>
                        </td>
                        <td id="d2[0]" ><a onclick="deleteacomp(0)" class="btn btn-success" style="color: white"><i class="fe fe-x-circle"></i></a>
                            <input type="hidden" id="entra[0]" name="entra[0]" value="SI">
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>

        <div class="col-sm-6">
                <label for="">Desde</label>
                <input type="date" name="desde" id="desde" class="form-control">
        </div>
        <div class="col-sm-6">
            <label for="">Hasta</label>
            <input type="date" name="hasta" id="hasta" class="form-control">
        </div>

        <div class="col-6 mg-t-20">
            <button class="btn btn-success" type="submit">Agregar Menú</button>
        </div>
    
    </div>
</form>
<div class="modal" id="modal-datepicker">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Seleccione la fecha del Menú</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h6>Fecha</h6>
                <!-- Select2 -->
                <input  class="edit-item-date form-control" data-toggle="datepicker" placeholder="MM/DD/YYYY" name="editdueDate" id="edit_due_date">
                <!-- Select2 -->
            </div>
            <div class="modal-footer">
                <button class="btn ripple btn-primary" type="button" >Agregar Fecha</button>
                <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection


@include('layout.script')