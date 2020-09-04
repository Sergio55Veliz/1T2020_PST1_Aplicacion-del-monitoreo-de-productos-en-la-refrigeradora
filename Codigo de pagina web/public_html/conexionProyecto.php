<?php
$db_user="id14446876_pstproyecto";
$db_password="H(DAK4[(b4q\8a*1";
$db_name="id14446876_refrigeradoriot";
$db_server="localhost";

$con = mysqli_connect($db_server,$db_user,$db_password,$db_name);
if (!$con) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    exit;
}

$query = $_POST["SQL"];
$result = mysqli_query($con, $query);
$filas = mysqli_num_rows($result);
$columnas = mysqli_num_fields($result);
$resultado = "Cantidad de filas: ".$filas."\r\n";
$resultado .= "Cantidad de columnas: ".$columnas."\r\n";

if($filas > 0){
    $i=0;
    while ($column = mysqli_fetch_field($result)) {
        $resultado .= $column->name . "\t|";
    }
    $resultado .= "\r\n";
    while($row = mysqli_fetch_array($result)){
        for($i=0;$i<$columnas;$i++){
            $resultado .= $row[$i]."\t|";
        }
        $resultado .= "\r\n";
    }
}
else{
    echo "Tabla vacía\r\n";
}

echo $resultado;
mysqli_free_result($result);
mysqli_close($con); 

?>