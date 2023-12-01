<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="img/png" href="icon2.png">
    <title>Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            height: 630px;
            display: flex;
        }
        .left {
            width: 300px;
            background-color: lightblue;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: 'Roboto', sans-serif;
            -webkit-backdrop-filter: blur(10px);
    backdrop-filter: blur(8px);
    background-color: rgba(0, 128, 255, 0.5);
            color: white;
            border-radius: 5px;
        }
        .right {
            width: 1200px;
            background-color: ultramarine;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Roboto', sans-serif;
            -webkit-backdrop-filter: blur(10px);
    backdrop-filter: blur(8px);
    background-color:white;
            color: #00a2ff;
            border-radius: 5px;
        }
        button {
            padding: 10px;
            width: 60%;
            
    margin-top: 40px;
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
    <div class="container">
        <div class="left">
            <img src="icon2.png" width="100px" height="100px" />
            <button type="button" onclick="location.href='iniciomedico.php'">🏠 Inicio</button>
            <button type="button" onclick="location.href='consultas.php'">💊 Consultas</button>
            <button type="button" onclick="location.href='expedientes.php'">📁 Expedientes</button>
            <button type="button" onclick="location.href='index.php'">❌ Cerrar sesión</button>
        </div>
        <div class="right" style="padding: 20px;">

            <div class="table">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre:</th>
                            <th>Correo:</th>
                            <th>Motivo:</th>
                            <th>Urgencia:</th>
                            <th>Fecha:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // Incluir la clase DB y crear una instancia
                            require_once 'DB.php';
                            $db = new DB("root", "", "localhost", "login");

                            // Obtener datos de la tabla 'citas'
                            $data = $db->findAll('citas');

                            // Mostrar solo los datos con fecha vigente
                            foreach ($data as $cita) {
                                $fechaCita = strtotime($cita['fecha']);
                                $fechaActual = strtotime(date('Y-m-d H:i:s'));

                                // Comparar fechas
                                if ($fechaCita > $fechaActual) {
                                    echo '<tr>';
                                    echo '<td>' . $cita['nombre'] . '</td>';
                                    echo '<td>' . $cita['correo'] . '</td>';
                                    echo '<td>' . $cita['motivo'] . '</td>';
                                    echo '<td>' . $cita['urgencia'] . '</td>';
                                    echo '<td>' . $cita['fecha'] . '</td>';
                                    echo '</tr>';
                                }
                            }

                            // Desconectar la base de datos
                            $db->__destruct();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
