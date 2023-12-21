<div class="row row-sm">
    <div class="col-lg-12 col-md-12">
        <div class="card custom-card">
           
            <div class="card-body">
                {{-- <form method="POST" action="{{ route('register') }}"> --}}
                    @csrf
                    <div class="row row-sm">
                        <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                            <div class="form-group has-success mg-b-0">
                                <label for="name" class="col-md-4 col-form-label text-md-end labelG" >{{ __('Nombre') }}*</label>
                                <input required id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"  autofocus>
                            </div>
                        </div>
                        <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                            <div class="form-group has-success mg-b-0">
                                <label for="name" class="col-md-4 col-form-label text-md-end labelG" >{{ __('Sexo') }}*</label>
                                <select name="sexo" id="sexo" class="form-control select2" required>
                                    <option value="">Seleccione</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                    <option value="No Aplica">No Aplica</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                            <div class="form-group has-success mg-b-0">
                                <label for="name" class="col-md-4 col-form-label text-md-end labelG" >{{ __('Ruc') }}*</label>
                                <input onchange="verificacedcontr()"  required id="ruc" type="text" class="form-control" name="ruc" autofocus>
                            </div>
                        </div>
                        <div class="col-lg-2 mg-t-20 mg-lg-t-0">
                            <div class="form-group has-success mg-b-0">
                                <label for="name" class="col-md-6 col-form-label text-md-end labelG" >{{ __('DV') }}</label>
                                <input onchange="verificacedcontr()"  id="dv" type="text" class="form-control" name="dv"   autofocus>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                            <div class="form-group has-success mg-b-0">
                                <label for="name" class="col-md-4 col-form-label text-md-end labelG" style="font-weight: 550">{{ __('Tipo de Persona') }} *</label>
                                <select name="persona" id="persona" class="form-control select2" onchange="habilitar()" >
                                    <option value="">Seleccione</option>
                                    <option value="Natural">Natural</option>
                                    <option value="Jurídica">Jurídica</option>
                                </select>
                            </div>
                        </div>
                        
                        <hr>
                        {{-- PERSONA NATURAL --}}
                        <div class="col-lg-12 mg-t-20 mg-lg-t-0">
                            <div id="natural" style="display: none"> 
                                <div class="row">
                                    <div class="col-lg-6 mg-t-6 mg-lg-t-0">
                                        <div class="form-group has-success mg-b-0">
                                            <label for="name" class="col-md-4 col-form-label text-md-end labelG" >{{ __('Nacionalidad') }}*</label>
                                            <input  id="nacional" type="text" class="form-control" name="nacional" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mg-t-6 mg-lg-t-0">
                                        <div class="form-group has-success mg-b-0">
                                            <label for="name" class="col-md-12 col-form-label text-md-end labelG" >{{ __('Cedula/Pasaporte') }}</label>
                                            <input id="cedula" type="text" class="form-control" name="cedula" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mg-t-6 mg-lg-t-0">
                                        <div class="form-group has-success mg-b-0">
                                            <label for="name" class="col-md-4 col-form-label text-md-end labelG" >{{ __('Estatus') }}</label>
                                            <select name="estado" id="estado" class="form-control select2" onchange="mostrar('document')">
                                                <option value="">Seleccione</option>
                                                <option value="Difunto">Difunto</option>
                                                <option value="Activo">Activo</option>
                                                <option value="Jubilado">Jubilado</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mg-t-6 mg-lg-t-0 inactiv" id="document">
                                        <label for="name" class="col-md-6 col-form-label text-md-end labelG">{{ __('Documento Estatus Contribuyente') }}</label>
                                        <div class="input-group file-browser">
                                            <input type="text" class="form-control border-right-0 browse-file" name="pos" id="pos" placeholder="Seleccine"  readonly>
                                            <input type="hidden" name="named" id="named" value="estatus_contribuyente" >
                                            <input type="hidden" name="tipo" id="tipo" value="Documento Estatus Contribuyente" >
                                            <label class="input-group-btn">
                                                <span class="btn btn-primary">
                                                    <i class="fe fe-upload mr-2"></i>  <input type="file" id="archivo" name="archivo" style="display: none;" multiple accept="image/png, image/jpg, application/pdf">
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mg-t-6 mg-lg-t-0">
                                        <div class="form-group has-success mg-b-0">
                                            <label for="name" class="col-md-4 col-form-label text-md-end labelG" >{{ __('Dirección') }}</label>
                                            <textarea class="form-control" id="direcc"  name="direcc" placeholder="Dirección" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        {{-- PERSONA JURÍDICA --}}
                        <div class="col-lg-12 mg-t-20 mg-lg-t-0">
                            <div id="juridica" style="display: none">
                                <div class="row">
                                <div class="col-lg-2 mg-t-2 mg-lg-t-0">
                                    <div class="form-group has-success mg-b-0">
                                        <label for="name" class="col-md-12 col-form-label text-md-end labelG" >{{ __('Ficha') }}</label>
                                        <input  id="ficha" type="text" class="form-control" name="ficha" autofocus>
                                    </div>
                                </div>
                                <div class="col-lg-2 mg-t-2 mg-lg-t-0">
                                    <div class="form-group has-success mg-b-0">
                                        <label for="name" class="col-md-12 col-form-label text-md-end labelG" >{{ __('Tomo') }}</label>
                                        <input  id="tomo" type="text" class="form-control" name="tomo" autofocus>
                                    </div>
                                </div>
                                    <div class="col-lg-2 mg-t-2 mg-lg-t-0">
                                        <div class="form-group has-success mg-b-0">
                                            <label for="name" class="col-md-12 col-form-label text-md-end labelG" >{{ __('Folio') }}</label>
                                            <input  id="folio" type="text" class="form-control" name="folio" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 mg-t-2 mg-lg-t-0">
                                        <div class="form-group has-success mg-b-0">
                                            <label for="name" class="col-md-12 col-form-label text-md-end labelG" >{{ __('Documento') }}</label>
                                            <input  id="documento" type="text" class="form-control" name="documento" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 mg-t-2 mg-lg-t-0">
                                        <div class="form-group has-success mg-b-0">
                                            <label for="name" class="col-md-12 col-form-label text-md-end labelG" >{{ __('Asiento') }} </label>
                                            <input  id="asiento" type="text" class="form-control" name="asiento" autofocus>
                                        </div>
                                    </div>
                                {{-- <div class="row"> --}}
                                    <div class="col-lg-4 mg-t-4 mg-lg-t-0">
                                        <div class="form-group has-success mg-b-0">
                                            <label for="name" class="col-md-4 col-form-label text-md-end labelG" >{{ __('Estatus') }} </label>
                                            <select name="estatus" id="estatus" class="form-control select2">
                                                <option value="">Seleccione</option>
                                                <option value="Vigente">Vigente</option>
                                                <option value="Suspendida">Suspendida</option>
                                                <option value="Disuelta">Disuelta</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mg-t-4 mg-lg-t-0">
                                        <div class="form-group has-success mg-b-0">
                                            <label for="name" class="col-md-12 col-form-label text-md-end labelG" >{{ __('Agente Residente') }} </label>
                                            <input  id="agente_r" type="text" class="form-control" name="agente_r" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mg-t-4 mg-lg-t-0">
                                        <div class="form-group has-success mg-b-0">
                                            <label for="name" class="col-md-12 col-form-label text-md-end labelG" >{{ __('Teléfono Agente Residente') }} </label>
                                            <input  id="tel_agent" type="number" class="form-control" name="tel_agent" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mg-t-6 mg-lg-t-0">
                                        <div class="form-group has-success mg-b-0">
                                            <label for="name" class="col-md-12 col-form-label text-md-end labelG" >{{ __('Miembros Junta Directiva') }} </label>
                                            <textarea class="form-control" id="junta"  name="junta" placeholder="Miembros Junta Directiva" rows="3"></textarea>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 mg-t-6 mg-lg-t-0">
                                        <div class="form-group has-success mg-b-0">
                                            <label for="name" class="col-md-12 col-form-label text-md-end labelG" >{{ __('Representante Legal') }} </label>
                                            <input  id="legal" type="text" class="form-control" name="legal" autofocus>
                                        </div>
                                    </div>
                                                                        
                                </div>
                                    <div class="col-lg-6 mg-t-6 mg-lg-t-0">
                                        <div class="form-group has-success mg-b-0">
                                            <label for="name" class="col-md-4 col-form-label text-md-end labelG" >{{ __('Dirección') }}</label>
                                            <textarea class="form-control" id="direcc"  name="direcc" placeholder="Dirección" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mg-t-6 mg-lg-t-0">
                                        <div class="form-group has-success mg-b-0">
                                            <label for="name" class="col-md-12 col-form-label text-md-end labelG" >{{ __('Teléfono Contacto') }} </label>
                                            <input  id="tel_contacto" type="text" class="form-control" name="tel_contacto" autofocus>
                                        </div>
                                    </div>
                            {{-- </div> --}}

                            </div>
                    </div>
                    <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                        <div class="form-group has-success mg-b-0">
                            <label for="name" class="col-md-12 col-form-label text-md-end labelG" >{{ __('Observaciones sobre el contribuyente') }} </label>
                            <textarea class="form-control" id="observacionC"  name="observacionC" placeholder="Observaciones sobre el contribuyente" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                        <div class="form-group has-success mg-b-0">
                            <label for="name" class="col-md-12 col-form-label text-md-end labelG" >{{ __('Celular Contribuyente') }} </label>
                            <input  id="cel_contribuyente" type="number" class="form-control" name="cel_contribuyente" autofocus>
                        </div>
                    </div>
                    <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                        <div class="form-group has-success mg-b-0">
                            <label for="name" class="col-md-12 col-form-label text-md-end labelG" >{{ __('Teléfono Contribuyente') }} </label>
                            <input  id="tel_contribuyente" type="number" class="form-control" name="tel_contribuyente" autofocus>
                        </div>
                    </div>
                    <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                        <div class="form-group has-success mg-b-0">
                            <label for="name" class="col-md-12 col-form-label text-md-end labelG" >{{ __('Correo') }} </label>
                            <input  id="email" type="email" class="form-control" name="email" autofocus>
                        </div>
                    </div>
                    <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                        <div class="form-group has-success mg-b-0">
                            <label for="name" class="col-md-12 col-form-label text-md-end labelG" >{{ __('Twiter') }} </label>
                            <input  id="twiter" type="text" class="form-control" name="twiter" autofocus>
                        </div>
                    </div>
                    <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                        <div class="form-group has-success mg-b-0">
                            <label for="name" class="col-md-12 col-form-label text-md-end labelG" >{{ __('Facebook') }} </label>
                            <input  id="facebook" type="text" class="form-control" name="facebook" autofocus>
                        </div>
                    </div>
                    <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                        <div class="form-group has-success mg-b-0">
                            <label for="name" class="col-md-12 col-form-label text-md-end labelG" >{{ __('Instagram') }} </label>
                            <input  id="instagram" type="text" class="form-control" name="instagram" autofocus>
                        </div>
                    </div>
                    
                    
                    
                    

                    </div>
                    <input type="hidden" name="c_user" id="c_user" value="{{Auth::user()->email}}">
                    <input type="hidden" name="tipo_c" id="tipo_c" value="interno">
                    <div class="row mb-0">
                        <div class="col-md-12 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Crear') }}
                            </button>
                        </div>
                    </div>
                {{-- </form> --}}
            </div>
        </div>
    </div>
</div>