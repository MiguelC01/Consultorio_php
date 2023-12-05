<?php

include 'conexion_usuarios2.php';

$correo = $_POST['correousuario']; // Corregir el nombre del campo
$contra = $_POST['contrasena'];   // Corregir el nombre del campo

// Utilizar consultas preparadas para evitar inyección SQL
$stmt = $conexionmedico->prepare("SELECT nombre FROM usuarios WHERE correousuario=? AND contrasena=? AND tipousuario=false");

if (!$stmt) {
    die('Error en la preparación de la consulta: ' . $conexionmedico->error);
}

$stmt->bind_param("ss", $correo, $contra);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Inicio de sesión exitoso
    session_start();
    $row = $result->fetch_assoc();

    // Almacena el nombre en la variable de sesión
    $_SESSION['user'] = $row['nombre'];
    $_SESSION['correo'] = $correo;
    header("location: inicioalumno.php");
    exit;
} else {
    echo '
    <script>
        alert("Datos erróneos, favor de verificar");
        window.location = "index.php";
    </script>';
    exit;
}

?>
