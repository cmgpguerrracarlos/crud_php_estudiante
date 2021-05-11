<?php
    define('SERVER','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DB','CURE');

    
    function conectar(){
        $conexion = mysqli_connect(SERVER, USER, PASSWORD,DB);
        return $conexion;
    }

    function operar($conexion, $sql){
        $resultado = mysqli_query($conexion,$sql) or die ("Error al operar");
        return $resultado;
    }

    function seleccionar($conexion,$sql){
        $resultado = mysqli_query($conexion,$sql);
        return $resultado;
    
    }
?>