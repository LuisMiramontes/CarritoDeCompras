
/*------------------------Declaración variables ------------------------ */
var cantProducto = 0;
var totalPrecio = 0;
var precioProducto = 0;
var codigoBarras =  Math.floor(1e9 + (Math.random() *   9e9));


/* Card flipped */
$('.card').click(function(){
$(this).toggleClass('flipped');
});


function step1(){
$('#compra').hide(300);
$('#datos').show(300);
$('#right1').css('border-color','#FA3C3D');
$('#left2').css('border-color','#FA3C3D');
$('#active2').removeClass('md-step');
$('#active2').addClass('md-step active');
$('#infoPanelTitulo').text("Informacion del pedido");
$('#infoPanelContenido').html("<b>Total:          $" + totalPrecio + "</b>");
$("#pago").css("display","none");

}

function step1Prew(){
$('#active2').removeClass('md-step active');
$('#active2').addClass('md-step');

$('#compra').show(300);
//$('#compra').css('display','block');
//$('#datos').css('display','none');
$('#datos').hide(300);
$("#pago").css("display","none");

$('#right1').css('border-color','');
$('#left2').css('border-color','');


$('#infoContacto').html("<p style='margin-top:15px;' id='infoPanelTitulo'>¿Alguna duda? contactanos:</p><p id='infoPanelContenido'><u>+52 3310902421</u></p>");
}

function step2(){
$('#datos').hide(300);
$('#pago').show(300);

$('#right2').css('border-color','#FA3C3D');
$('#left3').css('border-color','#FA3C3D');

$('#active3').removeClass('md-step');
$('#active3').addClass('md-step active');


}

function step2Prew(){
$('#active3').removeClass('md-step active');
$('#active3').addClass('md-step');

$('#datos').show(300);
$('#pago').hide(300);
$("#pago").css("display","none");

$('#right2').css('border-color','');
$('#left3').css('border-color','');

}

function step3(id){

$('#pago').hide(300);
//$('#datos').css('display','none');
//$('#pago').css('display','block');
$('#review').show(300);

$('#right3').css('border-color','#FA3C3D');
$('#left4').css('border-color','#FA3C3D');

$('#active4').removeClass('md-step');
$('#active4').addClass('md-step active');

if(id.id == "oxxoBoton"){
$("#rowOxxo").css('display','block');
$("#rowTarjeta").css('display','none');
}else{
$("#rowOxxo").css('display','none');
$("#rowTarjeta").css('display','block');
}
$("#codigoBarras").html("<h3>" + codigoBarras+ "</h3>");

}


function cash(){
$('#cash').css('opacity','1.0');
$('#tarjeta').css('opacity','0.2');

$('#imgPago2').css('border','3px solid green');
$('#imgPago1').css('border','1px solid ');

$("#pagoCredito").css('display','none');
$("#pagoOxxo").css('display','block');


}


function tarjeta(){
$('#tarjeta').css('opacity','1.0');
$('#cash').css('opacity','0.2');

$('#imgPago1').css('border','3px solid green');
$('#imgPago2').css('border','1px solid ');

$("#pagoCredito").css('display','block');
$("#pagoOxxo").css('display','none');
}



function menuList(price){
$('#selectCantidad').removeAttr("disabled");
console.log(price.id);

if(price.id == "buttonProducto1")
precioProducto = 99;
else if(price.id == "buttonProducto2")
precioProducto = 199;
else if(price.id == "buttonProducto3")
precioProducto = 299;

$("#colImage").html("<img src='multimedia/billpocket.jpg' style='width: 100px;'>");
cantProducto = $('#selectCantidad').val();
totalPrecio = precioProducto * cantProducto;

$("#priceTotal").html("<span>$" + totalPrecio + "mxn</span>");

}

function calculatePrice(){
cantProducto = $('#selectCantidad').val();
totalPrecio = precioProducto * cantProducto;
$("#priceTotal").html("<span>$" + totalPrecio + "mxn</span>");

}

function obtenerInfo(){
/* Datos del envio */
calle = $('#calle').val();
numExt = $('#numExt').val();
numInt = $("#numInt").val();
CP = $('#CP').val();
colonia = $('#colonia').val();
ciudad = $('#ciudad').val();
estado = $('#estado').val();
referencia = $('#referencia').val();

/*Datos del cliente */
let primerNombre = $("#primerNombre").val();
let segundoNombre = $("#segundoNombre").val();
let apellidoPaterno = $("#apellidoPaterno").val();
let apellidoMaterno = $("#apellidoMaterno").val();
let celular = $("#celular").val();
let email = $("#email").val();

/*Datos del pago */

let mmExp = $("#mmExp").val();
let aaExp = $("#aaExp").val();
let ccv = $("#ccv").val();
let numeroTarjeta = $("#numeroTarjeta").val();
let nombreTitular = $("#nombreTitular").val();


$("#modalInfoCliente").html("<h4>DATOS DEL ENVIO</h4><br>"+
"Calle : " + calle+ "<br>"+
"Num Exterior : " + numExt+ "<br>"+
"Num Interior : " + numInt+ "<br>"+
"Codigo Postal : " + CP+ "<br>"+
"Colonia : " + colonia+ "<br>"+
"Ciudad: " + ciudad+ "<br>"+
"Estado : " + estado+ "<br>"+
"Referencia : " + referencia+ "<br><br>");


$("#modalInfoCliente").append("<h4>DATOS DEL CLIENTE</h4><br>"+
"Primer Nombre : " + primerNombre+ "<br>"+
"Segundo Nombre : " + segundoNombre+ "<br>"+
"Apellido Paterno: " + apellidoPaterno+ "<br>"+
"Apellido Materno : " + apellidoMaterno+ "<br>"+
"Celular : " + celular+ "<br>"+
"Email: " + email+ "<br><br>");

$("#modalInfoCliente").append("<h4>DATOS DE LA TARJETA</h4><br>"+
"Tajerta : " + numeroTarjeta+ "<br>"+
"CVV : " + ccv+ "<br>"+
"Año : " + aaExp+ "<br>"+
"Mes : " + mmExp+ "<br>"+
"Titular : "+nombreTitular+"<br><br>");

$("#modalInfoCliente").append("<h4>DATOS DEL PEDIDO</h4><br>"+
"Cantidad de Producto : " + cantProducto+ "<br>"+
"Precio c/u : " + precioProducto+ "<br>"+
"Total : "+totalPrecio+"<br><br>");


}