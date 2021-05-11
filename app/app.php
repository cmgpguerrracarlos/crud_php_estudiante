<?php require 'cabezal.php' ?>
<title>Home</title>
</head>

<body>
    <div class="contenedor">
        <?php require 'estudiantes.php';
        $estudiantes = getAll();
        ?>
        <h1>Lista de Estudiantes</h1>
        <table>
            <thead>
                <tr>
                    <th>Ci</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($estudiantes as $d) {
                    echo "<tr>";
                    foreach ($d as $k => $v) {
                        echo "<td>$v</td>";
                    }
                    $ci = $d['ci'];
                    echo "<td><a href='/CURE/app/editar.php?ci=$ci'>editar</a></td>";
                    echo "<td><a href='/CURE/app/eliminar.php?ci=$ci'>eliminar</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <p>
            <?php
            $cant = mysqli_num_rows($estudiantes);
            echo "Cantidad total estudiantes: $cant";
            ?>
        </p>
        <a href="/CURE/app/agregar.php">Agregar</a>
    </div>
</body>

</html>