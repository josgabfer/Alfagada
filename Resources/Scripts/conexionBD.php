<?php

    function OpenCon()
    {
<<<<<<< HEAD
        $servidor = "";
        $usuario = "";
        $password = "";
        $baseDatos = "";

        // Parsing connnection string
        foreach ($_SERVER as $key => $value) {
            if (strpos($key, "MYSQLCONNSTR_") !== 0) {
                continue;
            }
            
            $servidor = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
            $baseDatos = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
            $usuario = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
            $password = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
        }
        /*$servidor = "MYSQLCONNSTR_localdb";
=======
        $servidor = "alfagada.scm.azurewebsites.net";
>>>>>>> b640684a5e7d8ff85138b024bffc33c13c632270
        $usuario = "root";
        $password = "";
        $baseDatos = "alfagada";
        */
        $conn = new mysqli($servidor,$usuario,$password,$baseDatos) or die("Connect failed:" . $conn -> error);
        return $conn;
    }
    
    function CloseCon($conn)
    {
        $conn -> close();
    }

?>
