<?php
// Include the DB class
require_once 'DB.php';

// Create a new instance of the DB class
$db = new DB('root', '', 'localhost', 'login');


// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if all required fields are filled
    $requiredFields = ['nombre', 'control', 'carrera', 'correo', 'peso', 'altura', 'sintomas', 'enfermedades', 'medicamento'];

    foreach ($requiredFields as $field) {
        if (empty($_POST[$field])) {
            echo '<div class="alert alert-primary">❌𝙉𝙤 𝙨𝙚 𝙥𝙪𝙙𝙤 𝙧𝙚𝙜𝙞𝙨𝙩𝙧𝙖𝙧❌</div>';
            exit;
        }
    }

    // Get form data
    $nombre = $_POST['nombre'];
    $control = $_POST['control'];
    $carrera = $_POST['carrera'];
    $correo = $_POST['correo'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $sintomas = $_POST['sintomas'];
    $enfermedades = $_POST['enfermedades'];
    $medicamentoId = $_POST['medicamento']; // Added line to get the selected medication's ID

    // Rest of your code for processing the form data...
    // Insert form data into the 'formulario_consulta' table
    $formData = array(
        'nombre' => $nombre,
        'control' => $control,
        'carrera' => $carrera,
        'correo' => $correo,
        'peso' => $peso,
        'altura' => $altura,
        'sintomas' => $sintomas,
        'enfermedades' => $enfermedades,
        'medicamento' => $medicamentoId,
    );


}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $nombre = $_POST['nombre'];
    $control = $_POST['control'];
    $carrera = $_POST['carrera'];
    $correo = $_POST['correo'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $sintomas = $_POST['sintomas'];
    $enfermedades = $_POST['enfermedades'];
    $medicamentoId = $_POST['medicamento']; // Added line to get the selected medication's ID

    // Build an array with form data
    $formData = array(
        'nombre' => $nombre,
        'control' => $control,
        'carrera' => $carrera,
        'correo' => $correo,
        'peso' => $peso,
        'altura' => $altura,
        'sintomas' => $sintomas,
        'enfermedades' => $enfermedades,
        'medicamento' => $medicamentoId, // Added line to include the selected medication's ID
    );

    // Insert form data into the 'formulario_consulta' table
    $insertResult = $db->insert('consulta', $formData);

    // Check if the insertion was successful
    if ($insertResult) {
        // Update the medication inventory by decrementing it by 1
        $updateResult = $db->sql("UPDATE medicamento SET inventario = inventario - 1 WHERE nombre = :nombre", array('nombre' => $medicamentoId));

        // Check if the inventory update was successful
        if ($updateResult) {
            echo '<script>
            window.location="iniciomedico.php"
            </script>
            ';
        } else {
            echo 'Form submitted successfully. Error updating medication inventory.';
        }
    } else {
        echo 'Error submitting form.';
    }
}

// Get updated data from the 'medicamento' table
$medicamentos = $db->findAll('medicamento');

// Close the database connection
$db->__destruct();
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
        <form method="POST" action="formulario_consulta.php">
            <label for="nombre">Nombre Completo</label>
            <input type="text" id="nombre" name="nombre" placeholder="Juan Pérez Martínez">

            <br><br><label for="control">N° de Control</label>
            <input type="text" id="control" name="control" placeholder="20690123">

            <br><br><label for="carrera">Carrera</label>
            <select name="carrera">
                <option value="IIND">IIND</option>
                <option value="ISC">ISC</option>
                <option value="IAMB">IAMB</option>
                <option value="IIA">IIA</option>
                <option value="IGE">IGE</option>
            </select>

            <br><br><label for="correo">Correo</label>
            <input type="text" id="correo" name="correo" placeholder="20690123@tecvalles.mx">

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
                        echo '<option value="' . $medicamento['nombre'] . '">' . $medicamento['nombre'] . '</option>';
                    }
                ?>
            </select>

            <center><button type="submit">📝 Registrar</button></center>
            
        </form>
        <center><button type="button" onclick="location.href='iniciomedico.php'">🏠 Inicio</button></center>
    </div>
</body>
</html>
