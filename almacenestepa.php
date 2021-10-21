<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pedir Farmacia Tepa</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link rel="icon" href="queocupas.jpg" type="image/png" />
	<style>
		 .button{
 background: blue;  
 color: white;       

  }
	</style>
</head>
<body>
	<center>
<h1>Pedir de Almacenes Tepa</h1>
<br><br><br><br>
 <img src="AT.jpg" class="img">
 <br><br><br><br><br><br><br><br><br><br>
 <form action="confirmacionpedidoft.php" method="POST">
 	
 	<input type="text" style="width : 300px; heigth : 100px" name="nombre" placeholder="Nombre de quien pide" required>
 	<br><br>
 		<input type="text" style="width : 300px; heigth : 100px" name="nombrepedido" placeholder="Nombre al que quedo el pedido"  required=""  oninvalid="this.setCustomValidity('Asistente Ocupas - Por favor ingresa un dato correcto o rellena el faltante')">
 	<br><br>
 		<input type="text" style="width : 300px; heigth : 100px" name="numerotel" placeholder="Numero de telefono de quien pide"  required=""  oninvalid="this.setCustomValidity('Asistente Ocupas - Por favor ingresa un dato correcto o rellena el faltante')">
 	<br><br>
 		<input type="text" style="width : 300px; heigth : 100px" name="quenecesitas" placeholder="Que necesitas de Almacenes Tepa"  required=""  oninvalid="this.setCustomValidity('Asistente Ocupas - Por favor ingresa un dato correcto o rellena el faltante')">
 	<br><br>
 		<input type="text" style="width : 300px; heigth : 100px" name="direccionrec" placeholder="En cual sucursal se debe acudir por tu pedido"  required=""  oninvalid="this.setCustomValidity('Asistente Ocupas - Por favor ingresa un dato correcto o rellena el faltante')">
 	<br><br>
 		<input type="text" style="width : 300px; heigth : 100px" name="direccionentrega" placeholder="Direccion donde se debe entregar el pedido"  required=""  oninvalid="this.setCustomValidity('Asistente Ocupas - Por favor ingresa un dato correcto o rellena el faltante')">
 	<br><br>
   <input type="text" style="width : 300px; heigth : 100px" name="pagaralgo" placeholder="¿Deberiamos pagar algo? (No aplica a servicio)  "  required=""  oninvalid="this.setCustomValidity('Asistente Ocupas - Por favor ingresa un dato correcto o rellena el faltante')">
 	<br><br>
 	<button type="submit" name="recibiendoform" class="button">Enviar Pedido</button>
 </form>
	</center>

</body>
</html>