<?php
	Class Conexion extends mysqli
	{
	
		 public function __construct()
		 {
			 parent::__construct('localhost', 'root', '', 'vestidossistema');
			 $this->query("SET NAMES 'utf8';");
			 $this->connect_errno ? die('Error') : $error="Conectado";
			 unset($error);
		 }
	}
?>