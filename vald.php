<?php
	include('inicio.php');
	class validar
	{
		public function vuser($usuario, $contra)
		{
		  $us = new Conexion();
		  $q= "SELECT * FROM `compras` WHERE `Usuario`='daracatu' AND `Contraseña`='12345';";
	      $use=$us->query($q);
		  $us->close();
		  return $use;
		}
	}


?>