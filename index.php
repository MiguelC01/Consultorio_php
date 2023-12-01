<?php

session_start();

if(isset($_SESSION['usuario'])){
    header("location: inicioalumno.php");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilosindex.css">
    <link rel="icon" type="img/png" href="icon2.png">
</head>
<body background="tecno.jpg">

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <center>
                            <center><img src="inicia.png" width="80px" height="80px" /></center> 
                        <button id="btn__iniciar-sesion">🙋 Alumno</button></center>
                    </div>
                    <div class="caja__trasera-register">
                        <h3></h3>
                        <center>
                            <center><img src="inicia.png" width="80px" height="80px" /></center>
                        <button id="btn__registrarse">👨‍⚕️ Médico</button></center>
                    </div>
                </div>

                <!--Logins-->
                <div class="contenedor__login-register">
                    
                    <!--Alumno-->
                    <form action="login_usuario.php" method="POST" 
                    class="formulario__login">
                        <center><img src="loro1.png" width="90px" height="90px" /> </center>
                        <h2>Alumno</h2>
                        <input type="text" placeholder="Correo electronico" name="correousuario">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>✔️ Entrar</button>
                    </form>

                    <!--Medico-->
                    <form action="login_usuario2.php" method="POST" 
                    class="formulario__register">
                        <center><img src="loro2.png" width="90px" height="90px" /> </center>
                        <h2>Médico</h2>
                        <input type="text" placeholder="Correo electronico" name="correousuario">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>✔️ Entrar</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="scriptindex.js"></script>
</body>
</html>