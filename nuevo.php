<?php
	class conexion extends mysqli
	{
		public function __construct()
		{
			$serv="localhost";
			$basedd="vestidossistema";
			$user="root";
			$password="";

			parent::__construct($serv,$user,$password,$basedd);
			$this->query("SET NAMES 'utf8';");
			$this->connect_errno ? die('No conexion') : $error="Conectado a ".$basedd;
		
		}
	}
?>