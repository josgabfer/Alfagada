<?php

    function OpenCon()
    {
        $connectstr_dbhost = '';
        $connectstr_dbname = '';
        $connectstr_dbusername = '';
        $connectstr_dbpassword = '';

        foreach ($_SERVER as $key => $value) {
            if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
                continue;
            }
            $servidor = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
            $usuario = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
            $password = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
            $baseDatos = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}
        
        /*$servidor = "localhost";
        $usuario = "root";
        $password = "";
        $baseDatos = "alfagada";*/
        
        $conn = new mysqli($servidor,$usuario,$password,$baseDatos) or die("Connect failed:" . $conn -> error);
        return $conn;
    }
    
    function CloseCon($conn)
    {
        $conn -> close();
    }

?>
