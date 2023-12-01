<?php
// index.php

// Inicia la sesión
session_start();

// Verifica si el botón de cerrar sesión fue presionado
if (isset($_POST['cerrar_sesion'])) {
    // Elimina todas las variables de sesión
    session_unset();

    // Destruye la sesión
    session_destroy();

    // Redirige al usuario a la página de inicio
    header("Location: index.php");
    exit();
}
?>



<!DOCTYPE html>
<html>
<head>
    <!-- ... (tu código actual) ... -->
</head>
<body background="tecno.jpg">
    <!-- ... (tu código actual) ... -->
</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="img/png" href="icon2.png">
    <title>Inicio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            height: 680px;
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
            <button type="button" onclick="location.href='medicamento.php'"> 📦 Inventario</button>
            <form method="POST" aciton="iniciomedico.php    " style="text-align: center;">
                <button type="submit" name="cerrar_sesion">❌ Cerrar sesión</button>
            </form>
        </div>
        <div class="right">
        <center>
        <img src="loro2.png" width="200px" height="200px" />
        <?php
        if (isset($_SESSION['user'])) {
            echo '<h1>😄🖐️¡Hola '.$_SESSION['user'].', bienvenido de nuevo!</h1></center>';
        } else {
            echo '<h1>¡Hola, bienvenido!</h1>';
        }
        ?>
        </div>
    </div>
</body>
</html>
