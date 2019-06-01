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
            $query="SELECT Apodo, Clave, Foto,Box FROM Competidor WHERE Apodo='$nick' AND Clave='$pass'";
            $consulta=$con->query($query);
            $rec=mysqli_fetch_array($consulta);
            $con->close();
            return $rec;
         }
         
         /**
         * Guarda ejercicio de jugador
         */
          public function GuardarEjercicio($Jugador, $Box, $TipoEjercicio, $Repeticiones, $Tiempo)
         {
            $con =new Conexion();
            $query="INSERT INTO Ejercicio(Jugador, Box, TipoEjercicio, Repeticiones, Tiempo ) VALUES ('$Jugador', '$Box', '$TipoEjercicio', '$Repeticiones', '$Tiempo');";
            $consulta=$con->query($query);
            $con->close();
         }
         
          /**
         * buscar  Juez
         */
          public function BuscarJuez($nombre, $clave)
         {
            $con =new Conexion();
            $query="SELECT Nombre, clave, box FROM Juez WHERE Nombre='$nombre' AND clave='$clave'";
            $consulta=$con->query($query);
            $rec=mysqli_fetch_array($consulta);
            $con->close();
            return $rec;
         }
         
          /**
         * buscar  competidores jueces
         */
          public function BuscarCompetidoresJueces($box)
         {
            $con =new Conexion();
            $query="SELECT IdEjercicio, Jugador, TipoEjercicio, Repeticiones, Tiempo, Estado, Box FROM Ejercicio WHERE Box='$box';";
            $consulta=$con->query($query);
            $con->close();
            return $consulta;
         }
         
         /**
         * Validar ejercicio
         */
          public function ValidarEjercicio($id)
         {
            $con =new Conexion();
            $query="UPDATE Ejercicio SET Estado=1 WHERE IdEjercicio='$id';";
            $consulta=$con->query($query);
            $con->close();
            
         }
    }   
    
 ?>