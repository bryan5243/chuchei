<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
//procesar.php
$selectedOption = $_POST['producto1'];
$precio1 = $_POST['precio1'];
$selectedOption2 = $_POST['producto2'];
$precio2 = $_POST['precio2'];
$total = $_POST['total'];
	
if( $total<20 and $selectedOption=="opcion2" or $selectedOption2=="opcion2"){
	$respuesta=$total+5;

	echo("el valor a pagar es:".$respuesta);
}
		
	else if($total<20 or $selectedOption=="opcion2" and $selectedOption2=="opcion2"  ) {
		$respuesta=$total+1.5;

	echo("el valor a pagar con recargo de 1,50 es:".$respuesta);
}
	
	else if($total>=20 and $total<40){
		echo("no existe recargo en la compra ni en el transporte ".$total);
	}
	
	
	else if($total>=40 and $total<=100 and $selectedOption=="opcion1" or $selectedOption=="opcion2" or $selectedOption2=="opcion1" or $selectedOption2=="opcion2" ){
		echo("No existe recargo de envio ".$total);
	}

	if($total>=40 and $total<=100 or $selectedOption=="opcion1" and $selectedOption2=="opcion1" and $selectedOption=="opcion2" and $selectedOption2=="opcion2") {
		$respuesta=$total*0.05;
		$res=$total-$respuesta;
		echo("Valor a pagar con el descuento del 5% es:".$res);
} 
	
	
	else if($total>100 and $selectedOption=="opcion1" or $selectedOption2=="opcion1" or  $selectedOption=="opcion2" or $selectedOption2=="opcion2" ){
		$respuesta=$total*0.10;
		$res=$total-$respuesta;
		echo("Valor a pagar con el descuento del 10% es:".$res);
	}

	
	
	
	else if($total>100  or $selectedOption=="opcion1" and $selectedOption2=="opcion1" and $selectedOption=="opcion2" and $selectedOption2=="opcion2") {
		$respuesta=$total*0.10;
		$res=$total-$respuesta;
		$tra=$res+5;
		echo("Valor a pagar con el descuento del 10% + 5 por transporte es:".$tra);
		}

	
	
	
		
	
?>
</body>
</html>