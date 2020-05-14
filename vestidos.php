<?php
	include('vald.php');
	$v=new validar();

	$usuario=$_POST['usuario'];
	$contraseña=$_POST['contraseña'];

    $final=$v->vuser($usuario, $contraseña);

	var_dump($final);

	if($final->num_rows==1)
	{
		header("location: contenido.php");
	}

	else
	{
		header("location: index.html");
	}

?>