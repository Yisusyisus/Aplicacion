<?php 
	class Db{
		private static $conexion=null;
		private function __construct(){}

		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion=new PDO('mysql:host=aplicacionweb1010-mysqldbserver.mysql.database.azure.com;dbname=mysqldatabase43886','mysqldbuser@aplicacionweb1010-mysqldbserver','Huevos77',$pdo_options);
			return self::$conexion;
		}
	}
?>
