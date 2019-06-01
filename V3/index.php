<?php
    require_once('Controladores/libs/SmartyBC.class.php');
    //require_once('Controladores/libs/Smarty.class.php');
    
    require_once('Modelo/Class.Conexion.php');
    require_once('Modelo/Class.Consultas.php');
    //require_once('modelo/class.Consultas.php');
   
    //require_once('modelo/class.close.php');
    
    $smarty = new SmartyBC();//crea un nuevo objeto de smarty
    
    $controller=isset($_GET['controller']) ? $_GET['controller'] : 'Home';
    
    if(is_file('Controladores/'.$controller.'.Controller.php'))
    {
        include('Controladores/'.$controller.'.Controller.php');
    }
    else
    {
        include('Controladores/Error.Controller.php');
    }
?>