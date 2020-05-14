<?php
	include('inicio.php');
	class validar
	{
		public function vuser($Usuario, $Contra)
		{
		  $us = new Conexion();
		  $q= "SELECT * FROM `compras` WHERE `Usuario`='$Usuario' AND `Contra`='$Contra';";
	      $use=$us->query($q);
		  $us->close();
		  return $use;
		}
	}


?>