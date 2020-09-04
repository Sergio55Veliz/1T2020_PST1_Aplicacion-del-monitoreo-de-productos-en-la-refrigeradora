<?php
    session_start();
    require 'conexion.php';
    
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $mensaje = "";
    
    if (!empty($usuario) && !empty($contraseña)) {
        $q = "SELECT * FROM Usuario WHERE usuario = '$usuario' and contrasenia='$contraseña'";
        $consulta = mysqli_query($conexion,$q);
        $filas = mysqli_num_rows($consulta);
        
        
        $columnas = mysqli_num_fields($consulta);
        $resultado = "";
      
        if($filas > 0){
            while($row = mysqli_fetch_array($consulta)){
                
                for($i=0;$i<$columnas;$i++){
                    $resultado .= $row[$i];
                    if($i<4){
                        $resultado .= "--";
                    }
                    
                }
                $resultado .= "\n";
            }
        }
      
        if($filas > 0){
            list($user_id, $nom, $pass, $correo, $user) = explode("--", $resultado);
            $_SESSION['user_id'] = $user_id;
            $_SESSION['nombre'] = $nom;
            $_SESSION['contraseña'] = $pass;
            $_SESSION['correo'] = $correo;
            $_SESSION['user'] = $user;
            //header("Location: /datos-usuario.php");
            header("Location: /pruebaFechas.php");
        }else{
            
            $mensaje="Usuario o clave incorrecta";
            header("Location: /iniciar-sesion.php");
        }
    }else{
        $mensaje =  "Por favor, llene todos los campos";
    }
  

?>