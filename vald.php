<?php
	include('inicio.php');
	class validar
	{
		public function vuser($usuario, $contra)
		{
		  $us = new Conexion();
		  $q= "SELECT * FROM `tabla` WHERE `Usuario`='daracat' AND `Contraseņa`='123';";
	      $use=$us->query($q);
		  $us->Close();
		  return $use;
		}
	}


?>