<?php require './cabezal.php' ?>
<title>Agregar estudiante</title>
</head>

<body>
    <div class="contenedor">
        <h1>Agregar estudiante</h1>
        <form action="agregado.php" method="POST">
            <fieldset>
                <legend>Estudiante</legend>
                <label for="ci">Ci</label><br>
                <input type="text" name="ci" require /><br>
                <label for="nombre">Nombre</label><br>
                <input type="text" name="nombre" require /><br>
                <label for="apellido">Apellido</label><br>
                <input type="text" name="apellido" require /><br>
                <label for="edad">Edad</label><br>
                <input type="number" name="edad" min=1 /><br>
                <input type="submit" value="Agregar"><br>
            </fieldset>
        </form>
        <br>
        <a href="./app.php"> Regresar </a>
    </div>

</body>

</html>