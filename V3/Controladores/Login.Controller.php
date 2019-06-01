<?php
	if(isset($_POST['login']))
    {
        if($_POST['login']=="registro")
        {
            if($_POST['tipo']=="competidor")
            {
                $con=new ConsultasOp();
                $user=$con->BuscarUsuarios($_POST['nombre'],$_POST['password']);          
                               
                if($user['Apodo'] = $_POST['nombre'] AND $user['Clave'] = $_POST['password'])
                {
                    session_start();
                    $_SESSION['user']=$user['Apodo'];
                    $_SESSION['foto']=$user['Foto'];
                    $_SESSION['box']=$user['Box'];
                    $smarty->display('Vista/Competidor.tpl');
                }
                else
                {
                    echo "<script language='JavaScript'>"."alert('Revisar NickName o Password ');"."</script>";      
                    echo "<META HTTP-EQUIV='refresh' content='1;URL=http://crossfitgameumg.solucionesdigitalesgt.xyz'>";
                }
            }
            else if($_POST['tipo']=="juez")
            {
                $con=new ConsultasOp();
                $user=$con->BuscarJuez($_POST['nombre'],$_POST['password']);   
                if($user['Nombre'] = $_POST['nombre'] AND $user['clave'] = $_POST['password'])
                {
                    session_start();
                    $_SESSION['user']=$user['Nombre'];
                    $_SESSION['box']=$user['box'];
                    
                    $jueces=$con->BuscarCompetidoresJueces($user['box']);
                    $juez=ConverArray($jueces);
            
                    $smarty->assign('revisar',$juez);
                    $smarty->display('Vista/Juez.tpl');
                }    
            }
            else
            {
                $smarty->display('Vista/Espectador.tpl');
            }
        }
        else
        {
            
        }
    }
    else
    {
        
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