<?php
	include('inicio.php');
	class validar
	{
		public function vuser($usuario, $contra)
		{
		  $us = new Conexion();
		  $q= "SELECT * FROM `tabla` WHERE `Usuario`='$usuario' AND `Contraseņa`='$contra';";
	      $use=$us->query($q);
		  $us->close();
		  return $use;
		}
	}


?>