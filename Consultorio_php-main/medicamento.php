<?php
require_once 'DB.php';

// Crear una instancia de la clase DB
$db = new DB('root', '', 'localhost', 'consultoriotec');

// Obtener información de todos los medicamentos desde la base de datos
$medicamentos = obtenerTodosLosMedicamentos($db);

function obtenerTodosLosMedicamentos($db)
{
    // Realizar una consulta para obtener información de todos los medicamentos
    $consulta = "SELECT * FROM medicamentos";
    return $db->findAll('medicamentos');
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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="img/png" href="icon2.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Inicio</title>
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
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <?php foreach ($medicamentos as $medicamento): ?>
                            <tr>
                                <td><?php echo $medicamento['id']; ?></td>
                                <td><?php echo $medicamento['medicamento']; ?></td>
                                <td><?php echo $medicamento['inventario']; ?></td>
                                <td>
                                    <form action="eliminar.php" method="POST">
                                        <input type="hidden" name="medicamento_id" value="<?php echo $medicamento['id']; ?>">
                                        <button name="delete" type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
