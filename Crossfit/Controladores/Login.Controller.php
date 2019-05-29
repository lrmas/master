<?php
	if(isset($_POST['login']))
    {
        if($_POST['login']=="registro")
        {
            if($_POST['tipo']=="competidor")
            {
                echo "competidor";
                
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