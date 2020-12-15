<?php
//cerrado de las sesiones, y redireccion a la pagina de inicio
    session_start();
    session_destroy();
    session_unset();
    header('Location: index.php');
?>