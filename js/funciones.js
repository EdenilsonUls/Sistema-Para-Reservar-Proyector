
$(document).ready(function()
{
$("#hacerreserva").click(function(reserva){
        $.post("reserva.php", function(htmlexterno){
   $("#contenedor").html(htmlexterno);

    	});
    	 return false;
});
});
 


$(document).ready(function()
{
$("#verreservas").click(function(){
        $.post("php/verreservas.php", function(htmlexterno){
   $(".contenedor").html(htmlexterno);

    	});
    	 return false;
});
});

$(document).ready(function()
{
$("#ver").click(function(){
        $.post("php/verreservas.php", function(htmlexterno){
   $("#contenedor").html(htmlexterno);

      });
       return false;
});
});


$(document).ready(function()
{
$("#registro").click(function(){
        $.post("registrosinrecargar.php", function(htmlexterno){
   $(".section").html(htmlexterno);

    	});
    	 return false;
});
});


$(document).ready(function()
{
$("#perfil").click(function(){
        $.post("php/verperfilalum.php", function(htmlexterno){
   $("#contenedor").html(htmlexterno);

      });
       return false;
});
});




(document).ready(function()
{
$("#proyectores").click(function(){
        $.post("php/proyectores.php", function(htmlexterno){
   $("#contenedor").html(htmlexterno);

      });
       return false;
});
});


///menu boostrar
(document).ready(function()
{
$("#menu").click(function(){
        $.post("reserva.php", function(htmlexterno){
   $(".contenedor").html(htmlexterno);

      });
       return false;
});
});

