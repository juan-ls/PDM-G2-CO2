<?php
$servername = "sql10.freemysqlhosting.net";
$username = "sql10425367";
$password = "atkgWUy5cx";
$dbname = "sql10425367";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  //echo'Conexion completada';
}

$base1 = mysqli_select_db($conn, 'sql10425367');
if (!$base1)
{
  //echo'No se encontró base de datos';
}
else{
  //echo'Se encontró la base de datos';
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
  //echo'Se guardó en registro médico';
  $sql = "INSERT INTO RegistroMedico
  VALUES ('$nombre', '$apPaterno', '$apMaterno', '$docIdentidad', '$sexo', '$pais', '$departamento', '$ciudad', '$correoElec', '$contrasena', '$codigo')";
  echo <<< END
  $sql
  END;
}
elseif ($estado == 'Paciente')
{
  //echo'Se guardó en registro de paciente';
  $sql = "INSERT INTO RegistroPaciente
  VALUES ('$nombre', '$apPaterno', '$apMaterno', '$docIdentidad', '$sexo', '$pais', '$ciudad', '$correoElec', '$contrasena', '$codigo')";
}

//$conn->query($sql); 

$registro=mysqli_query($conn, $sql);
if(!$registro){
  //echo'Error al registrarse';
}
else{
  //echo'Se registró exitosamente';
}

header('Location: Logueo.php');

$conn->close();
?>

