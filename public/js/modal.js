$(document).ready(function() {
    
    $('#tipo_pago').change(function() {
        var tipo=  document.getElementById("tipo_pago").value;
        if(tipo=="1")
        {
            document.getElementById("id_cuenta").disabled = false;
            document.getElementById("numero_referencia").disabled = false;
            document.getElementById("id_cuenta").focus();
            total=document.getElementById("total_pedido").value;
         
        }

    });

    $('#cuentas').change(function() {
       
        document.getElementById("numero_referencia").focus();

    });
 

});
