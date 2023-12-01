<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="img/png" href="icon2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expediente</title>
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
        <center><img src="icon2.png" width="90px" height="90px" /><h2>Registro de expediente</h2> </center>
        <form action="conexion_exp.php" method="POST">
            <label for="nombre">Nombre Completo:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Juan Pérez Martínez" required>

            <br><br><label for="usuario">Número de Control:</label>
            <input type="text" id="usuario" name="usuario" placeholder="20690123" required>

            <br><br><label for="carrera">Carrera:</label>
            <select id="carrera" name="carrera" required>
            <option value="IIND">IIND</option>
                <option value="ISC">ISC</option>
                <option value="IAMB">IAMB</option>
                <option value="IIA">IIA</option>
                <option value="IGE">IGE</option>
            </select>

            <br><br><label for="nacimiento">Fecha de Nacimiento:</label>
            <input type="date" id="nacimiento" name="nacimiento" required>

            <br><br><label for="afiliacion">Afiliación Médica:</label>
            <input type="text" id="afiliacion" name="afiliacion" placeholder="IMSS, ISSSTE, u otro" required>

            <br><br><label for="nss">Número de Seguro Social (NSS):</label>
            <input type="text" id="nss" name="nss" placeholder="22 89 66 1939 3" required>

            <br><br><label for="correo">Correo Electrónico:</label>
            <input type="text" id="correo" name="correo" placeholder="ejemplo@dominio.com" required>

            <br><br><label for="contacto">Contacto de Emergencia:</label>
            <input type="text" id="contacto" name="contacto" placeholder="Teléfono de contacto" required>
            
            <br><br><label for="enfermedades">Enfermedades Crónicas:</label>
            <input type="text" id="enfermedades" name="enfermedades" placeholder="Enfermedades crónicas (si las hay)">
            
            <br><br><label for="alergias">Alergias:</label>
            <input type="text" id="alergias" name="alergias" placeholder="Alergias conocidas">
            <center><br><br><button type="submit" >📄 Registrar expediente</button></center>
        
        </form>
        <center><button type="button" onclick="location.href='iniciomedico.php'">🏠 Inicio</button></center>
    </div>
</body>
</html>