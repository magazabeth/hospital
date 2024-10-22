<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="página hacerca de un Hospital que se va a llamar el magasultorio, ¿entienden? maga de magaly y consultorio">
    <link rel="stylesheet" href="style.css">
    <title>Hospital</title>
</head>

<body>
    <?php

include 'conexion.php';
$sql = "SELECT * FROM citas";
$resultado= $conn->query ($sql);

$pacientes = "SELECT * FROM pacientes";
$resultadoDePacientes = $conn->query ($pacientes);

$doctores = "SELECT * FROM doctores";
$resultadoDeDoctores = $conn->query ($doctores);

$especialidades = "SELECT * FROM especialidades";
$resultadoDeespecialidades = $conn->query ($especialidades);

$salas = "SELECT * FROM salas";
$resultadoDesalas = $conn->query ($salas);


$tratamientos = "SELECT * FROM tratamientos";
$resultadoDetratamiento = $conn->query ($tratamientos);


echo "<table border='1'>
<tr>
<th>ID</th>
<th>Fecha</th>
<th>ID Paciente</th>
<th>ID Doctor</th>
<th>ID Sala</th>
<th>Motivo</th>
</tr>";

while($fila = $resultado->fetch_assoc()){
echo "<tr>";
echo "<td>".$fila['id_cita']."</td>";
echo "<td>".$fila['fecha_cita']."</td>";
echo "<td>".$fila['id_paciente']."</td>";
echo "<td>".$fila['id_doctor']."</td>";
echo "<td>".$fila['id_sala']."</td>";
echo "<td>".$fila['motivo']."</td>";
echo "</tr>";
}


echo "<table border='1'>
<tr>
<th>ID Doctor</th>
<th>Nombre</th>
<th>Apellido</th>
<th>ID Especialidad</th>
</tr>";

while($fila = $resultadoDeDoctores->fetch_assoc()){
echo "<tr>";
echo "<td>".$fila['id_doctor']."</td>";
echo "<td>".$fila['nombre']."</td>";
echo "<td>".$fila['apellido']."</td>";
echo "<td>".$fila['id_especialidad']."</td>";
echo "</tr>";
}


echo "<table border='1'>
<tr>
<th>ID Especialidad</th>
<th>Nombre</th>
</tr>";

while($fila = $resultadoDeespecialidades->fetch_assoc()){
echo "<tr>";
echo "<td>".$fila['id_especialidad']."</td>";
echo "<td>".$fila['nombre']."</td>";
echo "</tr>";
}



echo "<table border='1'>
<tr>
<th>ID Paciente</th>
<th>Nombre</th>
<th>apellido</th>
<th>Fecha de nacimiento</th>
<th>Sexo</th>
<th>Telefono</th>
<th>Direccion</th>
</tr>";

while($fila = $resultadoDePacientes->fetch_assoc()){
echo "<tr>";
echo "<td>".$fila['id_paciente']."</td>";
echo "<td>".$fila['nombre']."</td>";
echo "<td>".$fila['apellido']."</td>";
echo "<td>".$fila['fecha_nacimiento']."</td>";
echo "<td>".$fila['sexo']."</td>";
echo "<td>".$fila['telefono']."</td>";
echo "<td>".$fila['direccion']."</td>";
echo "</tr>";
}


echo "<table border='1'>
<tr>
<th>ID Sala</th>
<th>Nombre</th>
<th>Ubicacion</th>
</tr>";

while($fila = $resultadoDesalas->fetch_assoc()){
echo "<tr>";
echo "<td>".$fila['id_sala']."</td>";
echo "<td>".$fila['nombre']."</td>";
echo "<td>".$fila['ubicacion']."</td>";
echo "</tr>";
}


echo "<table border='1'>
<tr>
<th>ID Tratamiento</th>
<th>Descripcion</th>
<th>ID Paciente</th>
<th>ID Doctor</th>
<th>Fecha de Inicio</th>
<th>Fecha de Fin</th>
</tr>";

while($fila = $resultadoDetratamiento->fetch_assoc()){
echo "<tr>";
echo "<td>".$fila['id_tratamiento']."</td>";
echo "<td>".$fila['descripcion']."</td>";
echo "<td>".$fila['id_paciente']."</td>";
echo "<td>".$fila['id_doctor']."</td>";
echo "<td>".$fila['fecha_inicio']."</td>";
echo "<td>".$fila['fecha_fin']."</td>";
echo "</tr>";
}
    ?>
</body>

</html>