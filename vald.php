<?php
	include('inicio.php');
	
	class validar
	{
		public function valuser($usuario, $contraseña)
		{
		$user = new Conexion();
		$q="SELECT * FROM `compras` WHERE 'Usuario'='$usuario' AND 'Contraseña'='$contraseña';";
		$usuario=$user->query($q)
		$user->close();
		return $usuario;
		}
	}


?>