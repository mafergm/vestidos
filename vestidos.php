<?php
	include('vald.php');
	$v=new validar();

	$Usuario=$_POST['Usuario'];
	$Contraseņa=$_POST['Contraseņa'];

    $final=$v->vuser($Usuario, $Contraseņa);

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