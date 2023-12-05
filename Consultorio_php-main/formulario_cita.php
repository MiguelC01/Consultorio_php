<?php
session_start();

// Incluye la clase DB
require_once 'DB.php';

// Verifica si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Crea una instancia de la clase DB
    $db = new DB("root", "", "localhost", "consultoriotec");

    // Recupera los datos del formulario
    $correoUsuario = $_SESSION['correo'];
    $motivoConsulta = $_POST['motivoconsulta'];
    $urgencia = $_POST['urgencia'];
    $fecha = $_POST['fecha'];

    // Verifica si ya existe una cita para la fecha y hora seleccionadas
    $table = 'citas';
    $column = 'fecha';
    $value = $fecha;

    if (!$db->exists($table, $column, $value)) {
        // La fecha y hora no están ocupadas, puedes insertar la nueva cita

        // Define los datos para la inserción
        $data = array(
            'correousuario' => $correoUsuario,
            'motivoconsulta' => $motivoConsulta,
            'urgencia' => $urgencia,
            'fecha' => $fecha
        );

        // Inserta la cita en la base de datos
        $inserted = $db->insert('citas', $data);

        if ($inserted) {
            echo 'Cita agendada correctamente.';
        } else {
            echo 'Error al agendar la cita.';
        }
    } else {
        echo 'La fecha y hora seleccionadas ya están ocupadas. Por favor, elige otra.';
    }
}
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="img/png" href="icon2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar citas</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .contenedor {
            max-width: 400px;
            margin: 0 auto;
            padding: 40px;
            
            -webkit-backdrop-filter: blur(10px);
    backdrop-filter: blur(8px);
    background-color: rgba(0, 128, 255, 0.5);
            color: white;
            border-radius: 5px;
        }

        label {
            display: block; 
            margin-top: 10px;
            color: white;
        }

        input[type="text"], select {
            width: 95%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            
        }

        button {
            padding: 10px;
            width: 35%;
            
    margin-top: 20px;
    border: none;
    border-radius: 3px;
    font-size: 14px;
    background: #00a2ff;
    font-weight: 600;
    cursor: pointer;
    color: white;
    outline: none;
        }

        
    </style>
</head>
<body background="tecno.jpg">
    <div class="contenedor">
        <center><img src="icon2.png" width="90px" height="90px" /><h2>Agendar cita</h2></center>
        <form action="formulario_cita.php" method="POST">

            <br><label for="motivo">Motivo de la cita:</label>
            <input type="text" id="motivo" name="motivoconsulta"  placeholder="Nauseas, Dolor de cabeza, Fiebre..." required>

            <br><label for="urgencia">Nivel de urgencia:</label>
            <select id="urgencia" name="urgencia" required>
                <option value="Bajo">Bajo 🙁</option>
                <option value="Medio">Medio 😟</option>
                <option value="Alto">Alto 😖</option>
            </select>

            <label for="datetime">Selecciona una fecha y hora:</label>
            <input type="datetime-local" id="datetime" name="fecha" required/>
            <br>
            <center><button type="submit">📝 Agendar cita</button></center>
            <br>

        </form>
        <a href="inicioalumno.php"><center><button type="submit"> 🏠 Inicio</button></center></a>
    </div>
</body>
</html>