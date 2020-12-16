<?php

    function OpenCon()
    {
        
        $servidor = "localhost:8888";
        $usuario = "root";
        $password = "D49WKj3LRneh";
        $baseDatos = "alfagada";
        
        $conn = new mysqli($servidor,$usuario,$password,$baseDatos) or die("Connect failed:" . $conn -> error);
        return $conn;
    }
    
    function CloseCon($conn)
    {
        $conn -> close();
    }

?>
