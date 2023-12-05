<?php
// Include the DB class
require_once 'DB.php';
$db = new DB("root", "", "localhost", "consultoriotec");
// Verificar si el objeto $db se creó correctamente
if ($db) {
    try {
        // Obtener los medicamentos de la base de datos
        $medicamentos = $db->findAll('medicamentos');

        // Verificar si se obtuvieron datos
        if (!$medicamentos) {
            echo '<option value="" disabled selected>No hay medicamentos disponibles</option>';
        }
    } catch (Exception $e) {
        // Capturar y mostrar cualquier excepción
        echo '<option value="" disabled selected>Error al obtener medicamentos</option>';
    } finally {
        // Desconectar la base de datos
        $db->__destruct();
    }
} else {
    echo '<option value="" disabled selected>Error al conectar a la base de datos</option>';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="img/png" href="icon2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva consulta</title>
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
        <center><img src="icon2.png" width="90px" height="90px" /><h2>Nueva consulta</h2> </center>
        
        <br>
        <form method="POST" action="formulario_consultaRegistro.php">
            
            <br><br><label for="correo">Correo</label>
            <input type="text" id="correo" name="correousuario" placeholder="20690123@tecvalles.mx">

            <br><br><label for="peso">Peso</label>
            <input type="text" id="peso" name="peso" placeholder="72kg">

            <br><br><label for="altura">Altura</label>
            <input type="text" id="altura" name="altura" placeholder="1.60m">

            <br><br><label for="sintomas">Descripción de los síntomas y la consulta</label>
            <input type="text" id="sintomas" name="sintomas" placeholder="Escurrimiento nasal, Dolor de cabeza...">
            
            <br><br><label for="enfermedades">Enfermedades detectadas</label>
            <input type="text" id="enfermedades" name="enfermedades" placeholder="Gripe, Presión baja, Migraña...">
            
            <br><br><label for="medicamento">Medicamento recetado</label>
            <select name="medicamento" id="medicamento">
                <?php
                    // Mostrar opciones en el select
                    foreach ($medicamentos as $medicamento) {
                        echo '<option value="' . $medicamento['medicamento'] . '">' . $medicamento['medicamento'] . '</option>';
                    }
                ?>
            </select>

            <center><button type="submit">📝 Registrar</button></center>
            
        </form>
        <center><button type="button" onclick="location.href='iniciomedico.php'">🏠 Inicio</button></center>
    </div>
</body>
</html>
