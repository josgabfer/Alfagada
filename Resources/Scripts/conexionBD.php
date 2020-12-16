<?php

    function OpenCon()
    {
        
        $servidor = "localhost:3306";
        $usuario = "root";
        $password = "bitnami";
        $baseDatos = "alfagada";
        
        $conn = new mysqli($servidor,$usuario,$password,$baseDatos) or die("Connect failed:" . $conn -> error);
        return $conn;
    }
    
    function CloseCon($conn)
    {
        $conn -> close();
    }

?>
