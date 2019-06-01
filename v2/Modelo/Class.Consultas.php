<?php
	class ConsultasOp
    {
        
        /**
         * devuelve todos los Box registrados
         */
         public function VerBox()
         {
            $con =new Conexion();
            $query="SELECT Nombre FROM Box WHERE 1; ";
            $consulta=$con->query($query);
            $con->close();
            return $consulta;
         }
         
         public function IdBox($box)
         {
            $con =new Conexion();
            $query="SELECT IdBox FROM Box WHERE Nombre='$box'; ";
            $consulta=$con->query($query);
            $con->close();
            return $consulta;
         } 
         
        /**
         * registor de usuarios: participante
         */
         public function RegistroUsuarios($nombre, $nick,$edad,$genero,$fecha,$clave,$box,$img)
         {
            $con =new Conexion();
            $query="INSERT INTO Competidor(Nombre, Apodo, Edad, Genero, FechaNac, Clave, Box, Foto) VALUES ('$nombre', '$nick','$edad','$genero','$fecha','$clave','$box','$img');";
            $consulta=$con->query($query);
            $con->close();
            return $consulta;
         }
         
         /**
         * buscar  usuarios: participante
         */
          public function BuscarUsuarios($nick, $pass)
         {
            $con =new Conexion();
            $query="SELECT Apodo, Clave, Foto FROM Competidor WHERE Apodo='$nick' AND Clave='$pass'";
            $consulta=$con->query($query);
            $rec=mysqli_fetch_array($consulta);
            $con->close();
            return $rec;
         }
    }
 ?>