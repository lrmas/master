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
                    $smarty->display('Vista/Competidor.tpl');
                }
                else
                {
                    echo "<script language='JavaScript'>"."alert('Revisar NickName o Password ');"."</script>";      
                    echo "<META HTTP-EQUIV='refresh' content='1;URL=http://crossfitgameumg.solucionesdigitalesgt.xyz'>";
                }
                
            }
            else if($_POST['tipo']=="box")
            {
                echo "box";
            }
            else if($_POST['tipo']=="juez")
            {
                echo "juez";
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
    
    
?>