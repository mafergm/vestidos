<?php
	include('vald.php');
	
	$val =new valuser();

	$Usuario=$_POST['Usuario'];
	$Contraseña=$_POST['Contraseña'];

    $resultado=$val-> validarus($Usuario, $Contraseña);

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