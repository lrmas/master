<?php
	session_start();
    unset ($_SESSION['user']);
    unset ($_SESSION['foto']);
    unset ($_SESSION['box']);
    session_destroy();
    print '<script language="JavaScript">'; 
    print 'alert("Sesion cerrada");'; 
    print '</script>';
    echo "<META HTTP-EQUIV='refresh' content='1;URL=http://crossfitgameumg.solucionesdigitalesgt.xyz'>"; 
    exit(); 
?>