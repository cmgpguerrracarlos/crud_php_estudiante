<?php require './cabezal.php'?>
<div class="contenedor">
<?php

$ci = $_POST['ci'];
$edad = $_POST['edad'];

require './estudiantes.php';

$rows = actualizar($ci,$edad);
if($rows>0){
    echo "Estudiante actualizado con exito";
}else{
    echo "Error al actualizar";
}

?>

<a href='./app.php'>Regresar</a>
</div>