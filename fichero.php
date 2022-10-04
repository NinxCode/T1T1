<?php

echo "Creao fichero";

$num = 1;
$num2 = 2;

$suma = $num + $num2;

echo "La suma es: " . $suma;

	$operando1 = $_GET['operando1'];
	$operando2 = $_GET['operando2'];
	$operador = $_GET['operador'];
	
	if($operador == "+"){
		$solucion = $operando1 + $operando2;
	}else if($operador == "-"){
		$solucion = $operando1 - $operando2;
	}else if($operador == "*"){
		$solucion = $operando1 * $operando2;
	}else if($operador == "/"){
		$solucion = $operando1 / $operando2;
	}
	echo "La solución es: ".$solucion;