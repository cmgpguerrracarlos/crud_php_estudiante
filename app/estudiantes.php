<?php
    require 'conexion.php';

    function getAll(){
        $con = conectar();
        return $estudiantes = seleccionar($con,"SELECT * FROM estudiante ORDER BY apellido,nombre");
    }

    function agregar($ci,$nombre,$apellido,$edad){
        $con = conectar();
        return $rows = operar($con,"INSERT INTO estudiante VALUES ('$ci','$nombre','$apellido',$edad)");
    }

    function eliminar($ci){
        $con = conectar();
        return $rows = operar($con,"DELETE FROM estudiante WHERE ci='$ci'");
    }

    function buscarPorCi($ci){
        $con = conectar();
        return $estudiantes = seleccionar($con,"SELECT * FROM estudiante WHERE ci=$ci");
    }

    function actualizar($ci,$edad){
        $con = conectar();
        return $rows = operar($con,"UPDATE estudiante SET edad='$edad' WHERE ci='$ci'");
    }
?>