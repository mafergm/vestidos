<?php
	include('vald.php');
	$v=new validar();

	$Usuario=$_POST['Usuario'];
	$Contrase�a=$_POST['Contrase�a'];

    $final=$v->vuser($Usuario, $Contrase�a);

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