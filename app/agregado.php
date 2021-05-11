<?php require './cabezal.php'?>
<div class="contenedor">
<?php
    require './model/estudiantes.php';
    $ci = $_POST['ci'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];

    $rows = agregar($ci,$nombre,$apellido,$edad);
    if($rows>0){
        echo "Estudiante agregado";
    }else{
        echo "No se pudo agregar";
    }

?>

<a href="./app.php"> Regresar </a>
</div>