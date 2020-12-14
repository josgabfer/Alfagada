<?php

    function OpenCon()
    {
        $conn = getenv("MYSQLCONNSTR_localdb");
        $conarr2 = explode(";",$conn); 
        $conarr = array();
        foreach($conarr2 as $key=>$value){
            $k = substr($value,0,strpos($value,'='));
            $conarr[$k] = substr($value,strpos($value,'=')+1);
        }
        print_r($conarr); 
        


        /*$servidor = "MYSQLCONNSTR_localdb";
        $usuario = "root";
        $password = "";
        $baseDatos = "alfagada";
        */
        //$conn = new mysqli($servidor,$usuario,$password,$baseDatos) or die("Connect failed:" . $conn -> error);
        //return $conn;
    }
    
    function CloseCon($conn)
    {
        $conn -> close();
    }

?>
