<?php
	include('vald.php');
	$v=new validar();

	$usuario=$_POST['usuario'];
	$contraseņa=$_POST['contraseņa'];

    $final=$v->vuser($usuario, $contraseņa);

	var_dump($final);

	if($final->num_rows==1)
	{
		header("location: ventas.html");
	}

	else
	{
		header("location: index.html");
	}

?>