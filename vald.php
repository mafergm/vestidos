<?php
	include('inicio.php');
	class validar
	{
		public function vuser($Usuario, $Contrase�a)
		{
		  $us = new Conexion();
		  $q= "SELECT * FROM `compras` WHERE `Usuario`='daracatu' AND `Contrase�a`='12345';";
	      $use=$us->query($q);
		  $us->close();
		  return $use;
		}
	}


?>