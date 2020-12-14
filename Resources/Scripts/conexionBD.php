<?php

    function OpenCon()
    {
        /*$servidor = "127.0.0.1:57337";
        $usuario = "azure";
        $password = "6#vWHD_$";
        $baseDatos = "alfagada";*/

        $servidor = "localhost";
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
