<?php
	include('vald.php');
	$v=new validar();

	$usuario=$_POST['usuario'];
	$contrase�a=$_POST['contrase�a'];

    $final=$v->vuser($usuario, $contrase�a);

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