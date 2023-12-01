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
        .contenedor {
            height: 590px;
            display: flex;
        }
        .izquierda {
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
        .derecha {
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
    <div class="contenedor">
        <div class="izquierda">
            <img src="icon2.png" width="100px" height="100px" />
            <button type="button" onclick="location.href='inicioalumno.php'">🏠 Inicio</button>
            <button type="button" onclick="location.href='doctores.php'">👩‍⚕️👨‍⚕️ Doctores</button>
            <button type="button" onclick="location.href='formulario_cita.php'">🕑 Agendar cita</button>
            <button type="button" onclick="location.href='index.php'">❌ Cerrar sesión</button>
            <button type="button" onclick="location.href='terminos.php'">📋 Terminos y condiciones</button>
        </div>
        <div class="derecha">
        <center>
        <h1><img src="loro1.png" width="200px" height="200px" />   
        <h1>😄🖐️¡Hola, Bienvenido de nuevo!</h1></center>
        </div>
    </div>
</body>
</html>
