<?php
	include('nuevo.php');
	class validar
	{
		public function validars($user, $pass)
		{
			$us = new conexion();
			$querey="SELECT * FROM `usuarios` WHERE `Usuario` = '$user' AND `Contraseņa` = '$pass';";
			$usuario = $us->query($querey);
			$us->close();
			return $usuario;
		}
	}
?>