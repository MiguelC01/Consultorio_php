<?php
if (!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre"]) and
    !empty($_POST["control"]) and
    !empty($_POST["carrera"]) and
    !empty($_POST["nacimiento"]) and
    !empty($_POST["afiliacion"]) and
    !empty($_POST["nss"]) and
    !empty($_POST["correo"]) and
    !empty($_POST["contacto"]) and
    !empty($_POST["enfermedades"]) and
    !empty($_POST["alergias"])){
        
        $nombre=$_POST["nombre"];
        $control=$_POST["control"];
        $carrera=$_POST["carrera"];
        $nacimiento=$_POST["nacimiento"];
        $afiliacion=$_POST["afiliacion"];
        $nss=$_POST["nss"];
        $correo=$_POST["correo"];
        $contacto=$_POST["contacto"];
        $enfermedades=$_POST["enfermedades"];
        $alergias=$_POST["alergias"];

        $sql=$conexion->query(" insert into alumnos(nombre,control,carrera,nacimiento,afiliacion,nss,correo,contacto,enfermedades,alergias)values('$nombre','$control','$carrera','$nacimiento','$afiliacion','$nss','$correo','$contacto','$enfermedades','$alergias')");
        if ($sql==1){
            echo '<div class="alert alert-primary">✔️𝘼𝙡𝙪𝙢𝙣𝙤 𝙧𝙚𝙜𝙞𝙨𝙩𝙧𝙖𝙙𝙤 𝙘𝙤𝙣 𝙚𝙭𝙞𝙩𝙤✔️</div>';
        } else{
            echo '<div class="alert alert-danger">❌𝙉𝙤 𝙨𝙚 𝙥𝙪𝙙𝙤 𝙧𝙚𝙜𝙞𝙨𝙩𝙧𝙖𝙧❌</div>';
        }


    }else{
        echo "❗❗❗ 𝙃𝙖𝙮 𝙪𝙣𝙤 𝙤 𝙫𝙖𝙧𝙞𝙤𝙨 𝙘𝙖𝙢𝙥𝙤𝙨 𝙞𝙣𝙘𝙤𝙢𝙥𝙡𝙚𝙩𝙤𝙨 ❗❗❗";
    }

}