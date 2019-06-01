<?php
	if(isset($_POST['RunEjerccio']))
    {
        if($_POST['RunEjerccio']=="wod")
        {
            session_start();
            $con=new ConsultasOp();
            $con->GuardarEjercicio($_SESSION['user'],$_SESSION['box'],$_POST['ejercio'],$_POST['repeticiones'],$_POST['tiempo']);
            echo "<script language='JavaScript'>"."alert('Datos Registrados');"."</script>";
            $smarty->display('Vista/Competidor.tpl');
              
        }
        else
        {
            echo "error participantes";
        }
    }
?>