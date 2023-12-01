<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $carrera = $_POST['carrera'];
    $nacimiento = $_POST['nacimiento'];
    $afiliacion = $_POST['afiliacion'];
    $nss = $_POST['nss'];
    $correo = $_POST['correo'];
    $contacto = $_POST['contacto'];
    $enfermedades = $_POST['enfermedades'];
    $alergias = $_POST['alergias'];
   
    $servername = "localhost"; // Cambia esto si tu base de datos está en un servidor diferente
    $username = "root";
    $password = "";
    $dbname = "login";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Insertar los datos en la tabla 'expedientes'
    $sql = "INSERT INTO expedientes (nombre, usuario, carrera, nacimiento, afiliacion, nss, correo, contacto, enfermedades, alergias)
    VALUES ('$nombre', '$usuario', '$carrera', '$nacimiento', '$afiliacion', '$nss', '$correo', '$contacto', '$enfermedades', '$alergias')";

            if ($conn->query($sql) === TRUE) {
                header("Location: exp_realizado.php");
                exit();
            } else {
                echo "Error al realizar expediente: " . $conn->error;
            }
            } else {
            echo "No se realizó el expediente";
            }

    $conn->close();
?>