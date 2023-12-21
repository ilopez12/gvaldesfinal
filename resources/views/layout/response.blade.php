<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if ($message =  Session::get('succes'))
<script>
    swal({
         title: "Orden Generada!",     
         icon: "success",
         button: {
             text: "Ok!",
             closeModal: false,
           },
        })
        .then((willDelete) => {
         if (willDelete) {
             window.location.href = "/menu";
         }
        });
</script>
@endif

@if ($message =  Session::get('guardada'))
<script>
    swal({
         title: "Menu Creado!",     
         icon: "success",
         button: {
             text: "Ok!",
             closeModal: false,
           },
        })
        .then((willDelete) => {
         if (willDelete) {
             window.location.href = "/menu";
         }
        });
</script>
@endif

@if ($message =  Session::get('carrito_no'))
<script>
    swal({
         title: "No tiene pedidos en el carrito",     
         icon: "success",
         button: {
             text: "Ok!",
             closeModal: false,
           },
        })
        .then((willDelete) => {
         if (willDelete) {
             window.location.href = "/menu";
         }
        });
</script>
@endif

@if ($message =  Session::get('success'))
@switch($message)
    @case('usuario')
        <script>
            swal({
                title: "Usuario Creado!",     
                icon: "success",
                button: {
                    text: "Ok!",
                    closeModal: false,
                },
                })
                .then((willDelete) => {
                if (willDelete) {
                    window.location.href = "/login";
                }
                });
        </script>
    @break
    @default
        
    @endswitch
@endif

@if ($message =  Session::get('falta'))
    @switch($message)
        @case('Acomp')
            <script>
                swal({
                    title: "Falatan Datos!",     
                    text: "Debe ingresar al menos un acompañamientos",     
                    icon: "warning",
                    button: {
                        text: "Ok!",
                        closeModal: false,
                    },
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        window.location.href = "/menu";
                    }
                    });
            </script>
            @break
        @case('Proteina')
        <script>
            swal({
                title: "Falatan Datos!",     
                text: "Debe ingresar al menos una Proteina",     
                icon: "success",
                button: {
                    text: "Ok!",
                    closeModal: false,
                },
                })
                .then((willDelete) => {
                if (willDelete) {
                    window.location.href = "/menu";
                }
                });
        </script>
            @break
        @default
            
    @endswitch

@endif