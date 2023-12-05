<?php
include 'DB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $correo = $_POST['correo'];
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];
    $nacimiento = $_POST['nacimiento'];
    $carrera = $_POST['carrera'];
    $afiliacion = $_POST['afiliacion'];
    $nss = $_POST['nss'];
    $telefono = $_POST['telefono'];
    $enfermedades = $_POST['enfermedades'];
    $alergias = $_POST['alergias'];

    // Crear una instancia de la clase DB
    $db = new DB("root", "", "localhost", "consultoriotec");

    // Inserción en la tabla 'usuarios'
    $dataUsuarios = array(
        'correousuario' => $correo,
        'nombre' => $nombre,
        'contrasena' => $contrasena,
        'tipousuario' => false // Considerando que este es un paciente
    );

    $db->insert('usuarios', $dataUsuarios);

    // Inserción en la tabla 'datospacientes'
    $dataPacientes = array(
        'correousuario' => $correo,
        'nacimiento' => $nacimiento,
        'carrera' => $carrera,
        'afiliacion' => $afiliacion,
        'nss' => $nss,
        'telefono' => $telefono,
        'enfermedades' => $enfermedades,
        'alergias' => $alergias
    );

    $db->insert('datospacientes', $dataPacientes);

    header("Location: exp_realizado.php");
    exit();


    // Desconectar la base de datos
    $db->__destruct();
}
?>
