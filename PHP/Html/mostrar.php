<?php
// Datos de conexión
$host = "localhost";
$usuario = "root";
$password = "";
$base_de_datos = "version_1";
$puerto = 3309; // Asegúrate de que sea el puerto correcto

// Conectar a MySQL
$conexion = new mysqli($host, $usuario, $password, $base_de_datos, $puerto);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Si se reciben datos por POST, insertar en la base de datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $conexion->real_escape_string($_POST['nombre']);
    $telefono = $conexion->real_escape_string($_POST['telefono']);
    $email = $conexion->real_escape_string($_POST['email']);

    $sql = "INSERT INTO personas (nombre, telefono, email) 
            VALUES ('$nombre', '$telefono', '$email')";

    if ($conexion->query($sql) === TRUE) {
        echo "<p>✅ Registro exitoso.</p>";
    } else {
        echo "<p>❌ Error al registrar: " . $conexion->error . "</p>";
    }
}

// Consultar registros existentes
$sql = "SELECT * FROM personas";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

    <h2 class="text-primary">📋 Registros:</h2>

    <?php if ($resultado->num_rows > 0): ?>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($fila = $resultado->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($fila['nombre']) ?></td>
                        <td><?= htmlspecialchars($fila['telefono']) ?></td>
                        <td><?= htmlspecialchars($fila['email']) ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No hay registros aún.</p>
    <?php endif; ?>

    <a href="index.php" class="btn btn-primary mt-3">Volver al formulario</a>

</body>

</html>

<?php
$conexion->close(); // Cerrar conexión
?>
