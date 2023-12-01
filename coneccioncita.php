<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $carrera = $_POST['carrera'];
    $correo = $_POST['correo'];
    $motivo = $_POST['motivo'];
    $urgencia = $_POST['urgencia'];
    $fecha = $_POST['fecha'];

    $servername = "localhost"; // Cambia esto si tu base de datos está en un servidor diferente
    $username = "root";
    $password = "";
    $dbname = "login";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Verificar si el usuario existe en la tabla 'usuarios'
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // El usuario existe, proceder a almacenar los datos en la tabla 'citas'
        $sql_insert = "INSERT INTO citas (nombre, usuario, carrera, correo, motivo, urgencia, fecha) 
                       VALUES ('$nombre', '$usuario', '$carrera', '$correo', '$motivo', '$urgencia', '$fecha')";

        if ($conn->query($sql_insert) === TRUE) {
            header("Location: cita_confirmada.php");
            exit();
        } else {
            echo "Error al agendar la cita: " . $conn->error;
        }
    } else {
        echo "El usuario no existe en la base de datos";
    }

    $conn->close();
}
?>

