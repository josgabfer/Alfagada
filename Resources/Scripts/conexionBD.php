<?php

    function OpenCon()
    {
        $servidor = "alfagada.scm.azurewebsites.net";
        $usuario = "root";
        $password = "";
        $baseDatos = "alfagada";
        $conn = new mysqli($servidor,$usuario,$password,$baseDatos) or die("Connect failed:" . $conn -> error);
        return $conn;
    }
    
    function CloseCon($conn)
    {
        $conn -> close();
    }

?>
