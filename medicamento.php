<?php
require_once 'DB.php';

// Crear una instancia de la clase DB
$db = new DB('root', '', 'localhost', 'login');

// Obtener información de todos los medicamentos desde la base de datos
$medicamentos = obtenerTodosLosMedicamentos($db);

function obtenerTodosLosMedicamentos($db)
{
    // Realizar una consulta para obtener información de todos los medicamentos
    $consulta = "SELECT * FROM medicamento";
    return $db->findAll('medicamento');
}

// Procesar la reducción del inventario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["reducir"])) {
    $medicamentoId = $_POST["medicamentoId"];
    $cantidadSeleccionada = $_POST["inventario"]; // Cambiado a "inventario"

    // Actualizar el inventario en la base de datos
    actualizarInventario($db, $medicamentoId, $cantidadSeleccionada);
}

function actualizarInventario($db, $medicamentoId, $cantidadSeleccionada)
{
    // Obtener el medicamento por ID
    $medicamento = $db->find('medicamento', ['id' => $medicamentoId]);

    if ($medicamento) {
        // Verificar si hay suficiente inventario antes de actualizar
        if ($medicamento['inventario'] >= $cantidadSeleccionada) {
            // Calcular el nuevo inventario
            $nuevoInventario = $medicamento['inventario'] - $cantidadSeleccionada;

            // Actualizar el inventario en la base de datos
            $db->update('UPDATE medicamento SET inventario = :nuevoInventario WHERE id = :id', [
                'id' => $medicamentoId,
                'nuevoInventario' => $nuevoInventario
            ]);

            // Redirigir a la página actual para reflejar los cambios
            header("Location: {$_SERVER['PHP_SELF']}");
            exit();
        } else {
            echo "No hay suficiente inventario disponible.";
        }
    } else {
        echo "Medicamento no encontrado.";
    }
}
?>


    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="img/png" href="icon2.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

        <title>Inicio</title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }
            .container {
                height: 720px;
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
                <button type="button" onclick="location.href='formulario_consulta.php'">🩹 Nueva consulta</button>
                <button type="button" onclick="location.href='citas.php'">🕑 Citas</button>
                <button type="button" onclick="location.href='pacientes.php'">🤕 Pacientes</button>
                <button type="button" onclick="location.href='formulario_expe.php'">📁 Registrar expediente</button>
                <button type="button" onclick="location.href='formulario_medicamento.php'">💊 Agregar medicamento</button>
                <button type="button" onclick="location.href='index.php'">❌ Cerrar sesión</button>
            </div>
            
            <div class="right">
                <div class="container mt-3">

        
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Medicamento</th>
                                    <th>Unidades disponibles</th>
                                </tr>
                            </thead>
                            <tbody> 
                                <?php foreach ($medicamentos as $medicamento): ?>
                                <tr>
                                    <td><?php echo $medicamento['id']; ?></td>
                                    <td><?php echo $medicamento['nombre']; ?></td>
                                    <td><?php echo $medicamento['inventario']; ?></td>
                                    <td><form action="" method="POST"> <button type="submit">Eliminar</button></form></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>|
    </body>
    </html>
