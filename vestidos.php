<?php
	include('vald.php');
	$v=new validar();

	$Usuario=$_POST['usuario'];
	$Contra=$_POST['contra'];
	
	var_dump($_POST);

    $final=$v->vuser($Usuario, $Contra);

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