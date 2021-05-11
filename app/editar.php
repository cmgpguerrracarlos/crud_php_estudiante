<?php require './cabezal.php'?>
    <title>Editar estudiante</title>
    <style>
        fieldset{
            width: 120px ;
            padding: 5px;

        }
    </style>
</head>

<body>
<div class="contenedor">
<?php
    require './estudiantes.php';
    $ci = $_GET['ci'];

    $estudiante = mysqli_fetch_array(buscarPorCi($ci));
    $nombre = $estudiante['nombre'];
    ?>
    <form action="./actualiazado.php" method="POST">
        <fieldset>
            <legend>Estudiante</legend>
            <label for="ci">Ci</label><br>
            <input type="text" name="ci" readonly value="<? echo $ci; ?>" /><br>
            <label for="nombre">Nombre</label><br>
            <input type="text" name="nombre" value="<? echo $estudiante['nombre']; ?>" readonly /><br>
            <label for="apellido">Apellido</label><br>
            <input type="text" name="apellido" value="<? echo $estudiante['apellido']; ?>" readonly /><br>
            <label for="edad">Edad</label><br>
            <input type="number" name="edad" value="<? echo $estudiante['edad']; ?>" min=1 /><br>
            <input type="submit" value="Actualizar"><br>
        </fieldset>
    </form>

    <a href="./app.php"> Regresar </a>
</div>
</body>

</html>