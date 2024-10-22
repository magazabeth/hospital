<?php
//Datos de la conexion
$servername="localhost";
$username="root";
$password="";
$bdname="hospital";

//Crear conección
 
$conn = new mysqli($servername, $username, $password, $bdname);

//Verificar la conexión
if ($conn->connect_error) die("No se pudo conectar:  ".$conn->connect_error);

