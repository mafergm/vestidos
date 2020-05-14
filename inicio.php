<?php
	Class Conexion extends mysqli
	{
	
		 public function __construct()
		 {
		     $servidor="localhost";
		     $basedatos="vestidos";
		     $usuario="root";
		     $contraseña="";

			 parent::__construct($servidor, $usuario , $contraseña, $basedatos);
			 $this->query("SET NAMES 'utf8';");
			 $this->connect_errno ? die("Error") : $error="Conectado a" .$basedatos;
			 unset($error);
		 }
	}
?>