<?php
    $db_user="id14446876_pstproyecto";
    $db_password="H(DAK4[(b4q\8a*1";
    $db_name="id14446876_refrigeradoriot";
    $db_server="localhost";
    
    $con = mysqli_connect($db_server,$db_user,$db_password,$db_name);
    $query="INSERT INTO `Registro-Alimento` (`id`, `idSensor`, `idRefri`, `peso`, `fecha`, `hora`) VALUES (NULL, '1', '1', '".$_GET['peso']."', CURRENT_DATE(), CURRENT_TIME())";
    mysqli_query($con, $query);
?>