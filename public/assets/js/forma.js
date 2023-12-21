function cambia(sale,entra){
    document.getElementById(sale).setAttribute("style", "display:none");
    document.getElementById(entra).setAttribute("style", "display:block");
}


function valor_nombre(){
    var combo =  document.getElementById('tipo_tramite');
    var tipo = combo.options[combo.selectedIndex].text;
    // alert(combo);
    $('#nombre_tramite').val(tipo);
}