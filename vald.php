<?php
	include('inicio.php');
	
	class validar
	{
		public function valuser($usuario, $contraseņa)
		{
		$user = new Conexion();
		$q="SELECT * FROM `compras` WHERE 'Usuario'='$usuario' AND 'Contraseņa'='$contraseņa';";
		$usuario=$user->query($q)
		$user->close();
		return $usuario;
		}
	}


?>