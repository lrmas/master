<?php
	if(isset($_GET['User']))
    {
        $con=new ConsultasOp();
        $con->ValidarEjercicio($_GET['User']);
        
        session_start();
        $jueces=$con->BuscarCompetidoresJueces($_SESSION['box']);
        $juez=ConverArray($jueces);
        
        $smarty->assign('revisar',$juez);
        $smarty->display('Vista/Juez.tpl');
    }
    
    function ConverArray($consulta)
    {
        $ar=array();
        while($row=mysqli_fetch_assoc($consulta))
        {
            array_push($ar,$row);
        }
        return $ar;
    }
?>