<?php
	include('vald.php');
	$v=new validar();

	$Usuario=$_POST['Usuario'];
	$Contraseña=$_POST['Contraseña'];

    $final=$v->vuser($Usuario, $Contraseña);

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