<?php
	include('vald.php');
	
	$val =new valuser();

	$Usuario=$_POST['Usuario'];
	$Contrase�a=$_POST['Contrase�a'];

    $resultado=$val-> validarus($Usuario, $Contrase�a);

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