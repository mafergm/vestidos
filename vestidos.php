<?php
	include('vald.php');
	
	$val =new valuser();

	$Usuario=$_POST['Usuario'];
	$Contraseņa=$_POST['Contraseņa'];

    $resultado=$val-> validarus($Usuario, $Contraseņa);

	var_dump($resultado);

	if($resultado->num_rows == 1)
	{
		header("location:ventas.html");
	}

	else
	{
		header("location: index.html");
	}

?>