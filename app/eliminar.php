<?php require './cabezal.php'?>
<div class="contenedor">
<?php
    require './model/estudiantes.php';
    $ci = $_GET['ci'];
    $rows = eliminar($ci);
    if($rows>0){
        echo "Estudiante eliminado";
    }else{
        echo "No se pudo eliminarar";
    }

?>

<a href="./app.php"> Regresar </a>
</div>
