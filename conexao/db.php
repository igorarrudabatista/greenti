<?php

$hostname = "localhost";
$bancodedados = "aptii251_chronos";
$usuario = "aptii251_chronos";
$senha = "wagner@123";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>