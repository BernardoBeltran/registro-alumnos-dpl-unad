<?php

$con = mysqli_connect("localhost", "root", "", "dbstudents");

if (!$con) {
    die("Error de conexión con la base de datos: " . mysqli_connect_error());
}

?>