var today = new Date();
var dd = today.getDate()+1;
var mm = today.getMonth()+1; 
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("fecha_entrega").setAttribute("min", today);

$(document).ready(function() {


    $('#hora_entrega').change(function() {
       
        var total=document.getElementById("total_pedido").value;

        if(total>199)
        {
            document.getElementById("ordenar").disabled = false;
        }

    });

   
});