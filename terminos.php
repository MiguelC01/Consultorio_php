<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="img/png" href="icon2.png">
    <title>Terminos y condiciones</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .contenedor {
            height: 650px;
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
        <h1><img src="logotecvalles.png" width="200px" height="140px" />   
        <h2>Términos y condiciones de privacidad </h2><br></center>
        <h5>Bienvenid@ a nuestro consultorio médico digita. Agradecemos tu confianza al utilizar nuestros servicios. Es importante que leas y comprendas nuestros términos y condiciones de privacidad.
        <br><br>
1. Información Recopilada:
Recopilamos información personal, como nombre, dirección, información de contacto y antecedentes médicos, para proporcionar servicios médicos digitales de calidad. Toda la información se manejará con estricta confidencialidad.
<br><br>
2. Uso de la Información:
La información recopilada se utilizará para proporcionar servicios médicos, programar citas, enviar recordatorios y mejorar la calidad de nuestros servicios. No compartiremos tu información con terceros sin tu consentimiento.
<br><br>
3. Seguridad:
Implementamos medidas de seguridad para proteger tu información contra accesos no autorizados, pérdidas o alteraciones. Sin embargo, ten en cuenta que ninguna transmisión por Internet es completamente segura.
<br><br>
4. Confidencialidad Médica:
La información médica se tratará con la máxima confidencialidad. Solo el personal médico autorizado tendrá acceso a estos registros, a menos que se requiera lo contrario por ley.
<br><br>
5. Cookies y Tecnologías Similares:
Podemos utilizar cookies y tecnologías similares para mejorar la experiencia del usuario y recopilar datos analíticos. Puedes ajustar la configuración de cookies en tu navegador.
<br><br>
6. Consentimiento:
Al utilizar nuestros servicios, aceptas los términos y condiciones de privacidad establecidos. Si no estás de acuerdo, te recomendamos no utilizar nuestros servicios.
<br><br>
7. Cambios en los Términos:
Nos reservamos el derecho de modificar estos términos y condiciones en cualquier momento. Te notificaremos sobre cambios significativos. El uso continuado de nuestros servicios después de dichos cambios constituirá tu aceptación.
<br><br>
8. Contacto:
Si tienes preguntas o inquietudes sobre nuestros términos y condiciones de privacidad, contáctanos a través de consultorio@tecvalles.mx o 481 987 6543
<br><br>
Gracias por confiar en nuestro consultorio médico digital.</h5>
        </div>
    </div>
</body>
</html>
