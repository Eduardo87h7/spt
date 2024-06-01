<html>

<head>
    <title>postgreSQL - tienda</title>
</head>

<body>
    <h1>postgreSQL - cliente</h1>
    <?php
    include_once './inc.php';
    $cnx = pg_connect($strCnx) or ("Error de conexion. " . pg_last_error());
    echo "Conexion exitosa<br>";
    # Ejecutando la Consulta
    if ($_POST) {
        $result = pg_query($cnx, "INSERT INTO cliente (nombre,apellido,direccion,telefono) VALUES ('" . pg_escape_string($_POST['nombre']) . "','" . pg_escape_string($_POST['apellido']) . "','" .  pg_escape_string($_POST['direccion']) . "'," . ((int)$_POST['telefono']) . " )");
        if (!$result) {
            echo "Query: Un error ha occurido.\n";
            exit;
        }
    }
    if ($_POST)
        echo "<div class=\"info\">Registro insertado
<a href=\"./ver\">volver</a></div>";
    ?>
    <form action="" method="post">
        <label>Nombre</label>
        <input type="text" name="nombre" value="" class="txtbox long" />
        <label>apellido</label>
        <input type="text" name="apellido" value="" class="txtbox long" />
        <label>Direccion</label>
        <input type="text" name="direccion" value="" class="txtbox long" />
        <label>Telefono</label>
        <input type="text" name="telefono" value="" class="txtbox" />
        <label>Password</label>
        <input type="text" name="password" value="" class="txtbox" />

        <br />
        <br />
        <input type="submit" value="Guardar" class="btn" /> <a href="./ver">volver</a>
    </form>
    <?php
    pg_close($cnx);
    ?>
    </table>
</body>

</html>