<?php
	Class Conexion extends mysqli
	{
	
		 public function __construct()
		 {
			 $serv="localhost";
			 $us="root";
			 $c="";
			 $base="vestidos";
			 parent::__construct($serv, $us, $c, $base);
			 $this->query("SET NAMES 'utf8';");
			
		 }
	}
?>