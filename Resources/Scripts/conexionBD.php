<?php

    function OpenCon()
    {
        
        $servidor = "127.0.0.1";
        $usuario = "root";
        $password = "D49WKj3LRneh";
        $baseDatos = "alfagada";
        
        $conn = new mysqli($servidor,$usuario,$password,$baseDatos) or die("Connect failed:" . $conn -> error);
        echo $conn;
        return $conn;
    }
    
    function CloseCon($conn)
    {
        $conn -> close();
    }

?>
