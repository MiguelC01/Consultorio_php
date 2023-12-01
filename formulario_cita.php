<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="img/png" href="icon2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar citas</title>
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
        <center><img src="icon2.png" width="90px" height="90px" /><h2>Agendar cita</h2> </center>
        <form action="coneccioncita.php" method="POST">
            <label for="nombre">Nombre Completo:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Juan Pérez Martínez" required>

            <br><label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" placeholder="usuario123" required>

            <br><label for="carrera">Carrera:</label>
            <select id="carrera" name="carrera" required>
                <option value="ISC">ISC</option>
                <option value="IGE">IGE</option>
                <option value="IIND">IIND</option>
                <option value="IIA">IIA</option>
                <option value="IAMB">IAMB</option>
            </select>
            
            <br><label for="correo">Correo:</label>
            <input type="text" id="correo" name="correo" placeholder="usuario@ejemplo.com" required>

            <br><label for="motivo">Motivo de la cita:</label>
            <input type="text" id="motivo" name="motivo"  placeholder="Nauseas, Dolor de cabeza, Fiebre..." required>

            <br><label for="urgencia">Nivel de urgencia:</label>
            <select id="urgencia" name="urgencia" required>
                <option value="Bajo">Bajo 🙁</option>
                <option value="Medio">Medio 😟</option>
                <option value="Alto">Alto 😖</option>
            </select>

            <label for="datetime">Selecciona una fecha y hora:</label>
            <input type="datetime-local" id="datetime" name="fecha" required/>
            <br>
            <center><button type="submit">📝 Agendar cita</button></center>
            <br>
            
        </form>
        <a href="inicioalumno.php">            <center><button type="submit"> 🏠 Inicio</button></center></a>
    </div>
</body>
</html>