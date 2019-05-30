<?php
	if(isset($_POST['login']))
    {
        if($_POST['login']=="registro")
        {
            if($_POST['tipo']=="Participante")
            {
                echo "Participante";
                
            }
            else if($_POST['tipo']=="Box")
            {
                echo "Box";
            }
            else if($_POST['tipo']=="Juez")
            {
                echo "Juez";
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