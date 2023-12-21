
moment.locale('es');
var cant_acomp = 0;
var cant_actual = 0;
function muestra(costo){

    document.getElementById('acomp').setAttribute("style", "display:block");
    var html = '<span class="badge rounded-pill badge-notification bg-danger"> B/.'+costo+'</span>';
    document.getElementById('carrito').innerHTML = html;

 
}

function adicionar(){

}

function muestrainp(){

    document.getElementById('orden_d').setAttribute("style", "display:block")
        $('#propia').val('NO');
}

function ocultainp(){
    document.getElementById('orden_d').setAttribute("style", "display:none")
    $('#propia').val('SI');

}

function agregaprot(){
    var id=  document.getElementById('numero').value;
    var id2 = parseInt(id) + 1;

    var html = '<tr>'+
        '<td id="p['+id2+']"><input type="text" class="form-control" name="proteina['+id2+']" id="proteina['+id2+']"></td>'+
        '<td id="c['+id2+']"><input type="text" class="form-control" name="costo['+id2+']" id="costo['+id2+']"></td>'+
        '<td id="a['+id2+']"><input type="text" class="form-control" name="adicionalP['+id2+']" id="adicionalP['+id2+']"></td>'+
        '<td id="l['+id2+']">'+
        '    <select class="form-control" name="lugar['+id2+']" id="lugar['+id2+']">'+
        '        <option value="1">Rest. Nuevo</option>'+
        '        <option value="1">Rest. Nuevo2</option>'+
        '    </select>'+
        '</td>'+
        '<td id="cc['+id2+']"><input type="number" class="form-control" name="cantacomp['+id2+']" id="cantacomp['+id2+']" value="3" aria-describedby="basic-addon2"></td>'+
        '<td id="t['+id2+']">'+
        '    <select class="form-control" name="tipo['+id2+']" id="tipo['+id2+']">'+
        '        <option value="1">COMIDA COMPLETA</option>'+
        '        <option value="2">SOPA</option>'+
        '        <option value="3">GUACHO</option>'+
        '        <option value="4">LASAGNA</option>'+
        '        <option value="5">POSTRE</option>'+
        '    </select>'+
        '<input type="hidden" value="SI" name="incluir['+id2+']"  id="incluir['+id2+']">'+
        '</td>'+
        '<td id="d['+id2+']"><a onclick="deleteprot('+id2+')" class="btn btn-success" style="color: white"><i class="fe fe-x-circle"></i></a></td>'
        '</tr>';


    document.getElementById('items').insertRow(-1).innerHTML = html;


    document.getElementById('numero').value = id2;
}

function deleteprot(id2){
        document.getElementById('p['+id2+']').setAttribute("style", "display:none")
        document.getElementById('c['+id2+']').setAttribute("style", "display:none")
        document.getElementById('a['+id2+']').setAttribute("style", "display:none")
        document.getElementById('l['+id2+']').setAttribute("style", "display:none")
        document.getElementById('cc['+id2+']').setAttribute("style", "display:none")
        document.getElementById('t['+id2+']').setAttribute("style", "display:none")
        document.getElementById('d['+id2+']').setAttribute("style", "display:none")
        document.getElementById('incluir['+id2+']').value = 'NO'
}

function deleteacomp(id2){
    document.getElementById('a2['+id2+']').setAttribute("style", "display:none")
    document.getElementById('c2['+id2+']').setAttribute("style", "display:none")
    document.getElementById('d2['+id2+']').setAttribute("style", "display:none")
    document.getElementById('entra['+id2+']').value = 'NO'
}
function agregaacomp(){
    
    var id=  document.getElementById('numeroA').value;
    var id2 = parseInt(id) + 1;

    var html = '<tr>'+
        '<td id="a2['+id2+']"><input type="text" class="form-control" name="acomp['+id2+']" id="proteina['+id2+']"></td>'+
        '<td id="c2['+id2+']"><input type="text" class="form-control" name="adicionalA['+id2+']" id="adicionalP['+id2+']"><input type="hidden" id="entra[0]" name="entra[0]" value="SI"></td>'+
        '<td id="l2['+id2+']"><select class="form-control" name="lugar2['+id2+']" id="lugar2['+id2+']">'+
        '<option value="1">Rest. Nuevo</option>'+
        '<option value="2">Rest. Nuevo2</option>'+
    '   </select></td>'+
        '<td id="d2['+id2+']"><a onclick="deleteacomp('+id2+')" class="btn btn-success" style="color: white"><i class="fe fe-x-circle"></i></a></td>'
    '</tr>';
    // document.getElementById('mostrar').setAttribute("style", "display:block")

    document.getElementById('items2').insertRow(-1).innerHTML = html;
    document.getElementById('numeroA').value = id2;
    console.log('TTT'+id);
}


function agregaacomp_2(){
    var id=  document.getElementById('numeroA').value;
    var id2 = parseInt(id) + 1;


    var nuevohijo = document.createElement('input');
    nuevohijo.className = 'form-control';
    nuevohijo.name = 'acomp['+id2+']';
    nuevohijo.id ='acomp['+id2+']';
    document.getElementById('child2').appendChild(nuevohijo);
    document.getElementById('child2').appendChild(document.createElement('br'));
    document.getElementById('numeroA').value = id2;

    var nuevohijo4 = document.createElement('input');
    nuevohijo4.className = 'form-control';
    nuevohijo4.name = 'costoA['+id2+']';
    nuevohijo4.id ='costoA['+id2+']';
    document.getElementById('child4').appendChild(nuevohijo4);
    document.getElementById('child4').appendChild(document.createElement('br'));

    var nuevohijo6 = document.createElement('input');
    nuevohijo6.className = 'form-control';
    nuevohijo6.name = 'adicionalA['+id2+']';
    nuevohijo6.id ='adicionalA['+id2+']';
    document.getElementById('child6').appendChild(nuevohijo6);
    document.getElementById('child6').appendChild(document.createElement('br'));
}
var resp;

function traepedidos(){
    var desde =  document.getElementById('desde').value;
    var hasta =  document.getElementById('hasta').value;
    var usuario =  document.getElementById('usuario').value;
    if(desde != '' && hasta == ''){
        Swal.fire({
            title: 'Error!',
            text: 'Debe seleccionar un rango de fechas para ver su lista de pedidos',
            icon: 'error',
            confirmButtonText: 'Enterado'
          })
    }else if(hasta != '' && desde == ''){
        Swal.fire({
            title: 'Error!',
            text: 'Debe seleccionar un rango de fechas para ver su lista de pedidos',
            icon: 'error',
            confirmButtonText: 'Enterado'
          })
    }else{
        console.log(desde+' hasta '+hasta);
        var formData  =new FormData();
            formData.append('desde', desde);
            formData.append('hasta', hasta);
            formData.append('usuario', usuario);
            formData.append('_token', $("input[name='_token']").val()); 
                $.ajax({
                    url: '/menu/getpedidos',
                    type: 'post',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        resp =  response;
                        var table ='';
                        
                        for(var i = 0; i < resp.length; i++){
                            console.log(resp[i].solicitante);
                            html = '<tr>'+
                                        // '<td>'+resp[i].id+'</td>'+
                                        '<td>'+resp[i].solicitante+'</td>'+
                                        '<td>'+resp[i].fecha+'</td>'+
                                        '<td>'+resp[i].total_prot+'</td>'+
                                        '<td>'+resp[i].acomp_adc+'</td>'+
                                        '<td>'+resp[i].total+'</td>'+
                                        '<td>'+resp[i].enviado+'</td>'+
                                    '</tr>'
                        table =  table + html
                        }
    
                        document.getElementById('bodyt').innerHTML = table;
    
                    }}); 
    }

    
}
function traemenu(){

    var desde =  document.getElementById('desde').value;
    var hasta =  document.getElementById('hasta').value;
    if(desde == '' || hasta == ''){
        Swal.fire({
            title: 'Error!',
            text: 'Debe seleccionar un rango de fechas para ver su lista de menu',
            icon: 'error',
            confirmButtonText: 'Enterado'
          })
    }else{
        var formData  =new FormData();
            formData.append('desde', desde);
            formData.append('hasta', hasta);
            formData.append('_token', $("input[name='_token']").val()); 
                $.ajax({
                    url: '/admin/getmenu',
                    type: 'post',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        resp =  response;
                        console.log(resp);
                        var table ='';
                        var proteina = [];
                        moment.locale('es');
                        for(var i = 0; i < resp.length; i++){
                           const date = moment(resp[i].fecha);
                           const day = moment.weekdays(date.day()); // Sábado
                           var dia = diaespanol(day);

                            if(resp[i].tipo == 'Proteina'){
                                proteina = resp[i].nombre
                                acomp = '-'
                            }else{
                                acomp =  resp[i].nombre  
                                proteina = '-'
                            }
                            html = '<tr>'+
                            '<td>'+moment(resp[i].fecha).format('D/MMM/YYYY')+'</td>'+
                            '<td>'+dia+'</td>'+
                            '<td>'+proteina+'</td>'+
                            '<td>'+acomp+'</td>'+
                            '</tr>';
                            table =  table +''+ html;
                        }
    
                        document.getElementById('bodyt').innerHTML = table;
    
                    }}); 
    }
    
}

function diaespanol(dia){
    var espan = '';
    switch (dia) {
        case 'Monday':
          //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor1
          espan = 'Lunes'
          break;
        case 'Tuesday':
          //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor2
          espan = 'Martes'
          break;
        case 'Wednesday':
            //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor2
            espan = 'Miércoles'
            break;
        case 'Thursday':
                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor2
            espan = 'Jueves'
            break;
        case 'Friday':
          //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor2
          espan = 'Viernes'
          break;
        case 'Saturday':
            //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor2
            espan = 'Sabado'
            break;
        case 'Sunday':
                //Declaraciones ejecutadas cuando el resultado de expresión coincide con el valor2
            espan = 'Domingo'
            break;
        default:
          //Declaraciones ejecutadas cuando ninguno de los valores coincide con el valor de la expresión
          break;
    }

    return espan
}


function muestraacomp(){
    document.getElementById('mostrar').style.display = "block"; 
    
    // alert('tres');
}
function actualiza_costo(json_d){
    // document.getElementById('costo_p').value = json_d.costo;
    // document.getElementById('costo_ad').value = json_d.costo_adicional;


        console.log(json_d);
        cant_acomp = json_d.cantAcomp;
        cant_actual = 0;
        console.log(cant_acomp);
        


}
function agregar(){
    // var contribuyentes = $('#contribuyentes').val();
    var solicitante = $('#propia').val();
    var fecha = $('#verhasta').val();
    var n_solicitante = $('#orden_d').val(); 

    if(solicitante == 'NO' && n_solicitante == ''){
        Swal.fire({
            icon: 'error',
            title: 'Oops... Solicitud para otra persona',
            text: 'Debe ingresar el nombre del solicitante ',
          })
    }else{
        var formData  =new FormData(document.getElementById("pedido"));

        $.ajax({
            url: '/menu/agregarpedido',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                resp =  response;
                if(response == true){
                    Swal.fire({
                        icon: 'success',
                        title: 'Pedido agregado a Carrito',
                        text: '',
                      }).then((result) => {
                        window.location.href = '/menu';
                      });
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'No se ha podido agregar su orden',
                        text: '',
                      }).then((result) => {
                        window.location.href = '/menu';
                      });
                }
                
            }}); 
    }
    // console.log(document.getElementById('pedido'));
}

function cantacomp(id){

    if (document.getElementById(id).checked == true){
        if (cant_actual < cant_acomp ){
            cant_actual = cant_actual +1;
        }else{
            document.getElementById(id).checked = false;
            Swal.fire({
                title: 'Importante!',
                text: 'Cantidad de Acompañamientos excedidos',
                icon: 'warning',
                confirmButtonText: 'Enterado'
              })
        }
    }else{
        cant_actual = cant_actual - 1;
    }
    
}

function ordenar(){
    window.location.href = '/menu/ordenar';
}

function ordenardirecto(){
    var solicitante = $('#propia').val();
    var fecha = $('#verhasta').val();
    var n_solicitante = $('#orden_d').val(); 

    if(solicitante == 'NO' && n_solicitante == ''){
        Swal.fire({
            icon: 'error',
            title: 'Oops... Solicitud para otra persona',
            text: 'Debe ingresar el nombre del solicitante ',
          })
    }else{
        var formData  =new FormData(document.getElementById("pedido"));

        $.ajax({
            url: '/menu/ordenar',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                resp =  response;
                if(response == true){
                    Swal.fire({
                        icon: 'success',
                        title: 'Pedido agregado a Carrito',
                        text: '',
                      }).then((result) => {
                        window.location.href = '/menu';
                      });
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'No se ha podido agregar su orden',
                        text: '',
                      }).then((result) => {
                        window.location.href = '/menu';
                      });
                }
                
            }}); 
    }
}
function validausuario(){
    var celular = $('#email').val();
    var formData  =new FormData();
    formData.append('celular', celular);
    formData.append('_token', $("input[name='_token']").val()); 
    $.ajax({
        url: '/valida_celular',
        type: 'post',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
            resp =  response;
            if(resp.length != ''){
                swal("Usuario Existente!", "Este celular ya ha sido registrado", "warning");
            }
          
        }}); 

}

function verificafecha(){
    $('#modal-datepicker').modal('show');
}