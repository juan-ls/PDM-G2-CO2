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
if 
{
  $sql = "INSERT INTO Registro (Nombre, apPaterno, apMaterno, docIdentidad, sexo, pais, departamento, ciudad, correoElec, confirmaCorreo, contraseña, confirmaContraseña, codigo)
  VALUES ('John', 'Doe', 'john@example.com')";
}
elseif ()
{
  
}

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "
<br>" . $conn->error;
}

$conn->close();
?>
