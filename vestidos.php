<?php
	include('inicio.php');
	$us=new Conexion();

	$usuario=$_POST['usuario'];
	$contraseņa=$_POST['contraseņa'];

    $query = "SELECT * FROM `usuarios` WHERE `Usuario`='$usuario' AND `Contraseņa`='$contra';";
	$use=$us->query($query);
    $us->close();

	if($use->num_rows==1)
	{
		header("location: ventas.html");
	}

	else
	{
		header("location: index.html");
	}

?>