<?php
// Incluir la clase DB
require_once 'DB.php';

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $correoUsuario = $_POST["correousuario"];
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $sintomas = $_POST["sintomas"];
    $enfermedades = $_POST["enfermedades"];
    $medicamento = $_POST["medicamento"];

    // Crear una instancia de la clase DB
    $db = new DB("root", "", "localhost", "consultoriotec");

    // Verificar si el objeto $db se creó correctamente
    if ($db) {
        try {
            // Verificar si existe el registro del correoUsuario en la tabla usuarios
            $usuarioExistente = $db->find('usuarios', array('correousuario' => $correoUsuario));

            if ($usuarioExistente) {
                // Insertar datos en la tabla expedientes
                $expedienteData = array(
                    'correousuario' => $correoUsuario,
                    'peso' => $peso,
                    'altura' => $altura,
                    'sintomas' => $sintomas,
                    'enfermedades' => $enfermedades,
                    'medicamento' => $medicamento
                );

                $db->insert('expedientes', $expedienteData);
                
                echo 'Datos insertados correctamente en la tabla expedientes.';
            } else {
                echo 'El correo del usuario no existe. Por favor, verifique el correo proporcionado.';
            }
        } catch (Exception $e) {
            // Capturar y mostrar cualquier excepción
            echo 'Error al procesar el formulario: ' . $e->getMessage();
        } finally {
            // Desconectar la base de datos
            $db->__destruct();
        }
    } else {
        echo 'Error al conectar a la base de datos.';
    }
}
?>