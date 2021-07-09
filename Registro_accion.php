<?php
$servername = "remotemysql.com";
$username = "0NVroEWWCo";
$password = "R7eEz8VkDg";
$dbname = "0NVroEWWCo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$base1 = mysqli_select_db($conn, 'RegistroMédico');
if (!$base1)
{
  echo'No se encontró RegistroMédico';
}
$base2 = mysqli_select_db($conn,'RegistroPaciente');
if (!$base2)
{
  echo'No se encontró RegistroPaciente';
}

//Se recuperan las variables del registro
$nombre = $_POST['nombre'];
$apPaterno = $_POST['apPaterno'];
$apMaterno = $_POST['apMaterno'];
$docIdentidad = $_POST['docIdentidad'];
$sexo = $_POST['sexo'];
$pais = $_POST['pais'];
$ciudad = $_POST['ciudad'];
$correoElec = $_POST['correoElec'];
$contrasena = $_POST['contraseña'];
$codigo = $_POST['codigo'];
$estado = $_POST['estado'];

if ($estado == 'Médico')
{
  $sql = "INSERT INTO RegistroMedico (nombre, apPaterno, apMaterno, docIdentidad, sexo, pais, departamento, ciudad, correoElec, contrasena, codigo)
  VALUES ($nombre, $apPaterno, $apMaterno, $docIdentidad, $sexo, $pais, $departamento, $ciudad, $correoElec, $contrasena, $codigo)";
}
elseif ($estado == 'Paciente')
{
  $sql = "INSERT INTO RegistroPaciente (nombre, apPaterno, apMaterno, docIdentidad, sexo, pais, departamento, ciudad, correoElec, contrasena, codigo)
  VALUES ($nombre, $apPaterno, $apMaterno, $docIdentidad, $sexo, $pais, $departamento, $ciudad, $correoElec, $contrasena, $codigo)";
}

$result = $conn->query($sql);

$conn->close();
?>
