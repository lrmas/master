<?php
	if(isset($_GET['registroUser']))
    {
        $con=new ConsultasOp();
        $box=$con->VerBox();
        $b=ConverArray($box);
        
        $smarty->assign('box',$b);
        $smarty->display('Vista/Registro.tpl');
        
    }
    else if(isset($_POST['GuardarRegistroUser']))
    {
        if($_POST['GuardarRegistroUser']=="registro")
        {
            $f=$_FILES['foto']['tmp_name'];
            $n=$_POST['nick'];
            
            $fe = date('Y-m-d',$_POST['fecha']);

            $DirImg=SubirFoto($f,$n);
            $con= new ConsultasOp();//$nombre, $nick,$edad,$genero,$fecha,$box,$img
            $con->RegistroUsuarios($_POST['nombre'],$_POST['nick'],$_POST['edad'],$_POST['genero'],$fe,$_POST['password'],$_POST['box'],$DirImg);
        }
    }
    
    function Subirfoto($file,$nombre)
    {
        $dir_subida = "Recursos/FotoCrossFit/";
                
        //$archivo_origen = $_FILES['foto']['tmp_name'];
        $archivo_origen=$file; 
        //$archivo_final = $dir_subida.$codigo.$categoria.".jpg";
        $archivo_final=$dir_subida.$nombre.".jpg";
        //$nombreAr=$codigo.$categoria.".jpg";
        $nombreAr=$nombre;
        $limite_kb = 16384;//fotos mo mayor 16 mb
        if(!$_FILES['foto']['error']>0 || $_FILES['foto']['size']<=$limite_kb*2048)
        {   
            if(move_uploaded_file($archivo_origen, $archivo_final))
            { 
               echo "<script language='JavaScript'>"."alert('Usuario Registrado');"."</script>";                
            }
            else
            { 
                echo "<script language='JavaScript'>"."alert('Usuario Registrado ');"."</script>";      
            }
            echo "<META HTTP-EQUIV='refresh' content='1;URL=http://crossfitgameumg.solucionesdigitalesgt.xyz'>";
        }
        else
        {
            echo "no se pudo cargar la foto......";
        }
        return $archivo_final;
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