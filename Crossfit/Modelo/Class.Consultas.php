<?php
	class ConsultasOp
    {
        /**
         * registor de usuarios: participante, box, juez, expectador
         */
         public function RegistroUsuarios()
         {
            $con =new Conexion();
            $query="";
            $consulta=$con->query($query);
            $con->close();
            return $consulta;
         }
         
         /**
         * buscar  usuarios: participante, box, juez, expectador
         */
          public function BuscarUsuarios()
         {
            $con =new Conexion();
            $query="";
            $consulta=$con->query($query);
            $con->close();
            return $consulta;
         }
    }
 ?>