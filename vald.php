<?php
	include('inicio.php');
	class validar
	{
		public function vuser($Usuario, $Contraseņa)
		{
		  $us = new Conexion();
		  $q= "SELECT * FROM `compras` WHERE `Usuario`='daracatu' AND `Contraseņa`='12345';";
	      $use=$us->query($q);
		  $us->close();
		  return $use;
		}
	}


?>