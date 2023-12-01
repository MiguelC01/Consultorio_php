<?php

include 'conexion_usuarios.php';

$correo = $_POST['correo'];
$contra = $_POST['contra'];

$validar_login = mysqli_query($conexiomedico,"SELECT * FROM usuarios WHERE correo='$correo'
and contra='$contra'");

if(mysqli_num_rows($validar_login) > 0){
    header("location: inicioalumno.php");
    exit;
}else{
    echo'
    <script>
        alert("Datos erróneos, favor de verificar");
        "
        </script>
    ';
    exit;
}

?>