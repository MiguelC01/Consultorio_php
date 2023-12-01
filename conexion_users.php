<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "login";

$conexionmedico = mysqli_connect($host, $user, $password, $database);
if ($conexionmedico){
    echo "se conectó";
}else{
    echo "no se conectó";
}

?>