<?php

    $host = "localhost";
    $User = "alberto";
    $pass = "1234";

    $db = "tiendamuebles";

    $conexion = mysqli_connect($host, $User , $pass, $db);

    if (!$conexion) {
     echo "Conexion fallida";
    }
?>
