
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="img/png" href="icon2.png">
    <title>Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('tecno.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        .container {
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
        .left, .right {
            border-radius: 5px;
            padding: 20px;
            margin: 10px;
            color: white;
        }
        .left {
            background-color: rgba(0, 128, 255, 0.5);
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .right {
            background-color: rgba(255, 255, 255, 0.8);
            color: #00a2ff;
            width: 100%;
            padding: 20px;
        }
        button {
            padding: 10px;
            width: 100%;
            margin-top: 10px;
            border: none;
            border-radius: 3px;
            font-size: 14px;
            background: #00a2ff;
            font-weight: 600;
            cursor: pointer;
            color: white;
            outline: none;
        }
        table {
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <img src="icon2.png" width="100px" height="100px" />
            <button type="button" onclick="location.href='iniciomedico.php'">🏠 Inicio</button>
            <button type="button" onclick="location.href='consultas.php'">💊 Consultas</button>
            <button type="button" onclick="location.href='expedientes.php'">📁 Expedientes</button>
            <button type="button" onclick="location.href='index.php'">❌ Cerrar sesión</button>
        </div>
        <div class="right">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre:</th>
                            <th>Correo:</th>
                            <th>Motivo:</th>
                            <th>Urgencia:</th>
                            <th>Fecha:</th>
                            <th>Acciones:</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
// Include the DB class
require_once 'DB.php';
$db = new DB("root", "", "localhost", "consultoriotec");

// Verificar si el objeto $db se creó correctamente
if ($db) {
    try {
        // Obtener datos de la tabla 'citas'
        $data = $db->findAll('citas');

        // Mostrar solo los datos con fecha vigente
        foreach ($data as $cita) {
            $fechaCita = strtotime($cita['fecha']);
            $fechaActual = strtotime(date('Y-m-d H:i:s'));

            // Comparar fechas
            if ($fechaCita >= $fechaActual) {
                echo '<tr>';
                echo '<td>' . $cita['correousuario'] . '</td>';
                echo '<td>' . $cita['motivoconsulta'] . '</td>';
                echo '<td>' . $cita['urgencia'] . '</td>';
                echo '<td>' . $cita['fecha'] . '</td>';
                echo '<td>' . $cita['status'] . '</td>';
                echo '<td><a href="tomarcita.php" class="btn btn-primary">Tomar Cita</a></td>';
                echo '</tr>';
            }
        }
    } catch (Exception $e) {
        // Capturar y mostrar cualquier excepción
        echo 'Error al obtener datos de citas';
    } finally {
        // Desconectar la base de datos
        $db->__destruct();
    }
} else {
    echo 'Error al conectar a la base de datos';
}
?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
