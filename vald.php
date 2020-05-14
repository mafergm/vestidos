<?php
	include('inicio.php');
	class validar
	{
		public function vuser($usuario, $contra)
		{
		  $us = new Conexion();
		  $q= "SELECT * FROM `tabla` WHERE `Usuario`='daracat' AND `Contraseña`='123';";
	      $use=$us->query($q);
		  $us->Close();
		  return $use;
		}
	}


?>