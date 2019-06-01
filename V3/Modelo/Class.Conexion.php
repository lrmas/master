<?php
	class Conexion extends mysqli 
    {
	   public function __construct()
       {
            $server="localhost";
            $user="u166622623_umg";
            $pass="geo4160150087";
            $base="u166622623_cross";
            //parent::construct('$server','$user','$pass','$base');
            //parent::__construct('mysql.hostinger.com',$user,'geo4160150087',$base);
            parent::__construct('localhost',$user,'4160150087',$base);
            $this->query("SET NAMES 'utf8';");
            $this->connect_errno ? die('Error en la conexion de la base de datos.') : $error="<br><br> Conectado con la base de datos: ".$base;
            //echo $error;
            unset($error);
       }
    }
?>