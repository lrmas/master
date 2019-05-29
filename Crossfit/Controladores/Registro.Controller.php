<?php
	if(isset($_GET['registroUser']))
    {
        $smarty->display('Vista/Registro.tpl');
        
    }
    else if(isset($_POST['GuardarRegistroUser']))
    {
        if($_POST['GuardarRegistroUser']=="registro")
        {
            $f=$_FILES['foto']['tmp_name'];
            $n=$_POST['nombre'];
            SubirFoto($f,$n);
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
               echo "<h3>Foto subida con exito</h3>"; 
            }
            else
            { 
               echo "<h3>Foto del producto no cambiada</h3>"; 
            }
        }
        else
        {
            echo "no se pudo cargar la foto......";
        }
    }
?>