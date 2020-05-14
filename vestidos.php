<?php
	include('inicio.php');
	$us=new Conexion();

	$usuario=$_POST['usuario'];
	$contraseña=$_POST['contraseña'];

    $query = "SELECT * FROM `usuarios` WHERE `Usuario`='$usuario' AND `Contraseña`='$contra';";
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