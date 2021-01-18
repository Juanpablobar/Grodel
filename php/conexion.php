<?php
    $servidor="localhost";
    $nombreBd="grodel";
    $usuario="root";
    $pass="";
    $conexion = new mysqli($servidor,$usuario,$pass,$nombreBd);
    if($conexion -> connect_error ){
        die("No se pudo conectar");
        
    }if (!mysqli_set_charset($conexion, "utf8")) 
    {
      printf("Error cargando el conjunto de caracteres utf8: %s\n", mysqli_error($conexion));
      exit();
    }
  return $conexion;
?> 