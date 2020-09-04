<?php
    session_start();
    require 'conexion.php';
    
    $user_id = $_SESSION['user_id'];
    $usuario = $_SESSION['user'];
    $nombre = $_SESSION['nombre'];
    $contraseña = $_SESSION['contraseña'];
    $correo = $_SESSION['correo'];
    $idRefi;
    
    $fecha_actual = date("Y-m-d H:i:s");
    echo $fecha_actual;
    echo $user_id;
    //filtramos por la refri
    $q_refri = "SELECT id FROM Refrigerador where idUsuario = $user_id";
    $conR = mysqli_query($conexion,$q_refri);
    
    $noregistro = "";
    $consulta;
    $filas;
    $columnas;
    if(!empty($conR)) {
        echo $fecha_actual;
        
        if(mysqli_num_rows($conR)>0){
        
        
        $f_refri = mysqli_num_rows($conR);
        $c_refri = mysqli_num_fields($conR);
        
        if($f_refri > 0){
            $row = mysqli_fetch_array($conR);
            $idRefi = $row[0];
            echo "refri<br></br>";
            echo "$idRefi<br></br>";
            
            
            $query = "SELECT * FROM `Registro-Alimento` where fecha = CURRENT_DATE() AND idRefri=$idRefi";
            $consulta = mysqli_query($conexion,$query);
            $query2 = "SELECT * FROM `Registro-Alimento` where fecha = CURRENT_DATE()-1 AND idRefri=$idRefi";
            $consulta2 = mysqli_query($conexion,$query2);
            
            
            if(!empty($consulta) AND mysqli_num_rows($consulta)>0){
                $ult_fecha_registro = mysqli_fetch_array($consulta)['fecha'];
                echo $ult_fecha_registro;
                
                $filas = mysqli_num_rows($consulta);
                $columnas = mysqli_num_fields($consulta);
                echo "si hay en consulta  1";
                
                
                
            }elseif(!empty($consulta2) AND mysqli_num_rows($consulta2)>0){
                $consulta = $consulta2;
                $ult_fecha_registro = mysqli_fetch_array($consulta)['fecha'];
                echo $ult_fecha_registro;
                
                $filas = mysqli_num_rows($consulta);
                $columnas = mysqli_num_fields($consulta);
                echo "si hay en consulta  2";
                
                
            }else{
                $noregistro = "No existen Registros que mostrar";
                
            }
            
            
            
            
            
            
            
            
            
        }else{
            $noregistro = "No existen Registros que mostrar";
            
        }
        }
        
    }else{
        $noregistro = "No existen Registros que mostrar";
    }
    
    echo $noregistro;
    
    
    
    $resultado = "";
    if(empty($noregistro)){
        //comienza el analisis de registro
        
        echo " registros no vacios  <br></br>";
        if($filas > 0){
            echo $columnas;
            echo $filas;
            //crear diccionario resultado...
            //formato->    {TipoAl: [{alimento:[porcentaje, peso], ...}, pesoprom], ...}
            while($row = mysqli_fetch_array($consulta)){
                echo "entra al while";
                /*for($i=0;$i<$columnas;$i++){
                    echo $i;
                    $resultado .= $row[$i];
                    if($i<5){
                        $resultado .= "--";
                    }
                    
                }*/
                list($id, $idSensor, $idRefri, $idpeso, $fecha, $hora) = $row;
                $idAlimento;
                $q_SenAl = "SELECT idAlimento FROM `Sensor-Alimento` where idSensor = $idSensor";
                $conSenAl = mysqli_query($conexion,$q_SenAl);
                if(!empty($conR) AND mysqli_num_rows($conSenAl)>0){
                    $row = mysqli_fetch_array($conSenAl);
                    $idAlimento = $row[0];
                    echo $idAlimento;
                }
                
                $var; $estado; $idTipo; $pesoMin; $pesoMAx;
                $q_Al = "SELECT * FROM `Alimento` where nombre = $idAlimento";
                $conAl = mysqli_query($conexion,$q_Al);
                //$f_Al = mysqli_num_rows($conAl);
                echo 1;
                if(!empty($conAl)){
                    echo 2;
                    if(mysqli_num_rows($conAl)>0){
                    $row = mysqli_fetch_array($conAl);
                    list($var, $estado, $idTipo, $pesoMin, $pesoMAx) = $row;
                    echo $idTipo;
                    }
                }
                echo 3;
                
                //calcular porcentaje
                //crear la clave de TIPO en el diccionario resultado
                
                
                
                $resultado .= "\n";
            }
            echo "salio del while ";
            echo $resultado;
            
            
            
            
            
        }else{
            $noregistro = "No existen Registros que mostrar";
            
        }
        
        
    }
    
    
    
    
    /*
    $datos = "";
    if(!empty($resultado)){
        $f_registros = explode("\n", $resultado);
        for($i=0;$i<6;$i++){
            list($id, $idSensor, $idRefri, $idpeso, $fecha, $hora) = explode("--", $f_registros[$i]);
            
            
            
        }
        
        
        
    }
    */
    
    
?>