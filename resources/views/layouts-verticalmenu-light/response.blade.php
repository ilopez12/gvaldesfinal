
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if ($message =  Session::get('creado'))
    @switch($message)
        @case('Contribuyente')
            <script>
                swal({
                     title: "Contribuyente Creado!",     
                     icon: "success",
                     button: {
                         text: "Ok!",
                         closeModal: false,
                       },
                    })
                    .then((willDelete) => {
                     if (willDelete) {
                         window.location.href = "/contribuyente";
                     }
                    });
            </script>
            @break
        @case('Contribuyente2')
            <input type="hidden" name="" id="">
            <script>
               
                swal({
                     title: "Contribuyente Creado!",     
                     icon: "success",
                     button: {
                         text: "Ok!",
                         closeModal: false,
                       },
                    })
                    .then((willDelete) => {
                     if (willDelete) {
                         window.location.href = "/finca/vistat/";
                     }
                    });
            </script>
            @break
        @case('tramite')
            <script>
              
                swal({
                     title: "Tramite Creado Creado!",     
                     icon: "success",
                     button: {
                         text: "Ok!",
                         closeModal: false,
                       },
                    })
                    .then((willDelete) => {
                     if (willDelete) {
                         window.location.href = "/tramites";
                     }
                    });
            </script>
            @break
        @case('gestion')
            <script>
                swal({
                     title: "Exito",   
                     text: "Se ha agregado la nueva gestion de cobros de la finca"  
                     icon: "success",
                     button: {
                         text: "Ok!",
                         closeModal: false,
                       },
                    })
                    .then((willDelete) => {
                     if (willDelete) {
                         window.location.href = "/cobros";
                     }
                    });
            </script>
            @break
        @default
        
    @endswitch

@endif

@if ($message = Session::get('falta'))
    @switch($message)
        @case('nacionalidad')
        <script>
            swal("Datos requeridos", "Debe Ingresar la nacionalidad!", "error");        
        </script>
            @break
        @case('documento_estatus')
        <script>
             swal("Datos requeridos", "Debe Adjuntar un documento para el estatus seleccionado!", "error");  
        </script>
            @break
        @case('ContribuyenteU')
            <script>
                 swal("Datos requeridos", "Para realizar el cambio de propietario debe seleccionar un propietario!", "error");  
            </script>
                @break
            
        @default
            
    @endswitch

@endif

@if ($message = Session::get('existe'))
    @if ($message == 'Contribuyente')
    <script>
        swal({
             title: "Contribuyente Existente!",     
             text: "No se puede crear un contribuyente que ya existe en sistema, favor valide los datos.",     
             icon: "error",
             button: {
                 text: "Ok!",
                 closeModal: false,
               },
            })
            .then((willDelete) => {
             if (willDelete) {
                location.reload();
             }
            });
    </script>
    @endif

@endif

@if ($message = Session::get('success'))
    <script>
    	swal({
             title: "Proyecto Creado!",     
             icon: "success",
             button: {
                 text: "Ok!",
                 closeModal: false,
               },
            })
            .then((willDelete) => {
             if (willDelete) {
                 window.location.href = "/proyecto";
             }
            });
    </script>
@endif
@if ($message = Session::get('update'))
    @switch($message)
        @case('Contribuyente')
        <script>
            swal({
                 title: "Contribuyente Actualizado!",     
                 icon: "success",
                 button: {
                     text: "Ok!",
                     closeModal: false,
                   },
                })
                .then((willDelete) => {
                 if (willDelete) {
                     window.location.href = "/contribuyente";
                 }
                });
        </script> 
            @break
        @case('Traspaso')
        <script>
            swal({
                 title: "Finca Actualizada!",     
                 text: "Se realizó el cambio de propietario!",     
                 icon: "success",
                 button: {
                     text: "Ok!",
                     closeModal: false,
                   },
                })
                .then((willDelete) => {
                 if (willDelete) {
                     window.location.href = "/finca/propietario";
                 }
                });
        </script>
            @break
        @case('tramiteS')
        <script>
            swal({
                 title: "Se actualizó el trámite",     
                 icon: "success",
                 button: {
                     text: "Ok!",
                     closeModal: false,
                   },
                })
                .then((willDelete) => {
                 if (willDelete) {
                     window.location.href = "/tramites";
                 }
                });
        </script> 
            @break
        @case('tramiteA')
            <script>
                swal({
                     title: "Se actualizó el trámite",     
                     icon: "success",
                     button: {
                         text: "Ok!",
                         closeModal: false,
                       },
                    })
                    .then((willDelete) => {
                     if (willDelete) {
                         window.location.href = "/tramites";
                     }
                    });
            </script> 
            @break
        @case('asignar')
        <script>
                swal({
                     title: "Se Asignó el trámite",     
                     icon: "success",
                     button: {
                         text: "Ok!",
                         closeModal: false,
                       },
                    })
                    .then((willDelete) => {
                     if (willDelete) {
                         window.location.href = "/tramites/admin";
                     }
                    });
            </script> 
                @break
            @case('asignar')
                <script>
                        swal({
                             title: "Se Asignó la finca a Gestión",     
                             icon: "success",
                             button: {
                                 text: "Ok!",
                                 closeModal: false,
                               },
                            })
                            .then((willDelete) => {
                             if (willDelete) {
                                 window.location.href = "/cobros/gestion";
                             }
                            });
                    </script> 
                @break
        @default
        asignarG
    @endswitch
    
@endif

@if ($message = Session::get('error'))
    <script>
        //  var msg= Session::get('error');
        swal({
             title: "Error Interno!",     
             text:  msg,     
             icon: "error",
             button: {
                 text: "Ok!",
                 closeModal: false,
               },
            })
            .then((willDelete) => {
             if (willDelete) {
                location.reload();
             }
            });
    </script>
@endif