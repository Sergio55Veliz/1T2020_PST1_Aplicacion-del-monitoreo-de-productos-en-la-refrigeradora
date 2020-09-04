<?php
    $db_user="id14446876_pstproyecto";
    $db_password="H(DAK4[(b4q\8a*1";
    $db_name="id14446876_refrigeradoriot";
    $db_server="localhost";
    
    $conexion = mysqli_connect($db_server,$db_user,$db_password,$db_name);
    if (!$conexion) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        exit;
    }

    //mysqli_close($conexion); 
?>