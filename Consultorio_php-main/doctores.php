<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="img/png" href="icon2.png">
    <title>Doctores</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            
            display: flex;
        }
        .left {
            width: 300px;
            height: 590px;
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
            width: 600px;
            height: 590px;
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
        .right2{
            width: 600px;
            height: 590px;
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
            <button type="button" onclick="location.href='inicioalumno.php'">🏠 Inicio</button>
            <button type="button" onclick="location.href='doctores.php'">👩‍⚕️👨‍⚕️ Doctores</button>
            <button type="button" onclick="location.href='formulario_cita.php'">🕑 Agendar cita</button>
            <button type="button" onclick="location.href='index.php'">❌ Cerrar sesión</button>
        </div>
        <div class="right">
            <center><img src="selena.png" width="200px" height="200px" /><br>
            <h2>Dra. Selena Cárdenas Durán</h2>
            <h3>Instituto Politécnico Nacional</h3>
            <h3>Cédula profesional: 400822</h3>
            <h3>SSA: 61326</h3>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=selena.cardenas@tecvalles.mx&su=Asunto&body=Cuerpo%20del%20correo" target="_blank">
                <button type="button">✉️ Enviar correo</button>
            </a></center>
        </div>
        <div class="right2">
            <center><img src="bruno.png" width="200px" height="200px" /><br>
                <h2>Dr. Bruno Díaz Morales</h2>
                <h3>Universidad Nacional Autónoma de México</h3>
                <h3>Cédula profesional: 396689</h3>
                <h3>SSA: 54785</h3>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=bruno.diaz@tecvalles.mx&su=Asunto&body=Cuerpo%20del%20correo" target="_blank">
                    <button type="button">✉️ Enviar correo</button>
                </a></center>
            </div>
    </div>
</body>
</html>
