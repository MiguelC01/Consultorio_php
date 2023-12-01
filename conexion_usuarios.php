<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "consultoriotec";

$conexionalumno = mysqli_connect($host, $user, $password, $database);
if ($conexionalumno){
    echo "se conectó";
}else{
    echo "no se conectó";
}

?>