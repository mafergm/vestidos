<?php
	include('inicio.php');
	
	class validar
	{
		public function valuser($usuario, $contrase�a)
		{
		$user = new Conexion();
		$q="SELECT * FROM `compras` WHERE 'Usuario'='$usuario' AND 'Contrase�a'='$contrase�a';";
		$usuario=$user->query($q)
		$user->close();
		return $usuario;
		}
	}


?>