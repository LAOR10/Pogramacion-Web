<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Operaciones en PHP</title>
</head>

<body>
	<h1 id="encabezado1">Operaciones básicas en PHP</h1>
	<?php
	//En  PHP la suma es con el uso de +
	$num1 = 4;
	$num2 = 6;
	$resultado = ($num1+$num2);
	
	echo "EL resultado de la suma es: " .$resultado;
	echo "<br />";
	echo "El resultado de sumar num1 + num2 es: $resultado";
	echo "<br /><br />";
	
	//Ahora haremos restas
	
	$num1 = 10;
	$num2 = 6;
	$resultado = ($num1-$num2);
	
	echo "EL resultado de la resta es: " .$resultado;
	echo "<br />";
	echo "El resultado de restar num1 - num2 es: $resultado";
	echo "<br /><br />";
	
	
	//Ahora haremos multiplicación 
	
	$num1 = 10;
	$num2 = 77;
	$resultado = ($num1*$num2);
	
	echo "EL resultado de la multiplicación es: " .$resultado;
	echo "<br />";
	echo "El resultado de multiplicar num1 * num2 es: $resultado";
	echo "<br /><br />";
	
	//Ahora haremos divisiones 
	
	$num1 = 1000;
	$num2 = 77;
	$resultado = ($num1/$num2);
	
	echo "EL resultado de la division es: " .$resultado;
	echo "<br />";
	echo "El resultado de dividir num1 / num2 es: $resultado";
	echo "<br /><br />";
	
	  
function miTabla($renglones)
{
    for($x = 1; $x<= $renglones; $x++){

    echo "<tr>";
    
    echo "</tr>";
   }
}


miTabla(1);
    echo "Hecho por Luis Orozco";
        echo "</br>";
        date_default_timezone_set("America/Mexico_city");
        echo "La fecha actual es: ".date("d/m/y"). " y la hora exacta es: ".date("G:i:s");
	
	?>
</body>
</html>