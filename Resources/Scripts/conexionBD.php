<?php

    function OpenCon()
    {
        
        $servidor = "127.0.0.1";
        $usuario = "alfagada";
        $password = "alfagada";
        $baseDatos = "alfagada";
        
        $conn = new mysqli($servidor,$usuario,$password,$baseDatos) or die("Connect failed:" . $conn -> error);
        return $conn;
    }
    
    function CloseCon($conn)
    {
        $conn -> close();
    }

?>
