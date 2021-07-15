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

$docIdentidad = $_POST['docIdentidad'];
$contrasena = $_POST['contraseña'];

if ($estado == 'Médico')
{
  //Obt5iene info de paciente
  $sql = "SELECT * FROM Historial WHERE id ='$docIdentidad' and contraseña = '$contrasena'";
  $info = mysqli_query($conn,$sql);
}

if ($info){
    if (mysqli_num_rows($info) == 1){
        session_start();
        $_SESSION['is_login'] = true;
        $_SESSION['id'] = $id;
        header("Location: PaginaPaciente.php");
    }
    else{
        echo'Usuario y/o contraseña inválidos';
    }
}

$conn->close();
?>

<!DOCTYPE html>

<html lang="es">

    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Se realizará el inicio de sesión o el registro." />
        <title>Iniciar sesión</title>
        <style>
            * {
                margin: 0px;
                padding: 0px;
            }

            .encabezado {
                margin-left: 200px;
                margin-right: 100px;
            }

            #imagenref {
                margin-left: 320px;
                height: 200px;
            }

            .encabezado li {
                list-style: none;
                display: inline;
                float: left;
            }

            .titulo {
                padding-bottom: 15px;
                font-family: 'Arial Rounded MT';
                font-size: 25px;
                color: #5293d5;
            }

            .divisorSel{
                clear:both;
                background-color:#91b0cc;
                height:50px;
            }

            #UsuarioContraseña{
                margin-top:30px;
                margin:auto;
                border: none;
                border-radius:5px;
                text-align: center;
                background-color:#99d28a;
                width:400px;
                height:350px;
            }

            #ingresoDatos{
                padding-top:15px;
                padding:10px;
                box-sizing:border-box;
                font-size:20px;
                font-family:Arial;
                font-weight:bold;
            }

            #iniciosesion{
                font-family:Arial;
                font-size:25px;
                color: white;
                padding-top:10px;
                margin-left:250px;
            }

            .buton {
                -webkit-appearance: button;
                -moz-appearance: button;
                border: none;
                border-radius: 5px;
                text-align: center;
                font-family: Verdana;
                color: snow;
                text-decoration: none;
                cursor: pointer;
                transition-duration: 0.3s;
            }

            .buton1 {
                background-color: #47c864;
                height: 35px;
                width: 150px;
            }

            .buton1:hover{
                background-color:#308840;

            }

            .buton2 {
                margin-top: 20px;
                background-color:#4c69c9;
                height: 35px;
                width: 100px;
            }
            .buton2:hover{
                background-color:#393c97;
            }

            #olvidado{
                color:#2d1be6;
                text-decoration:none;
                font-family:Calibri;
            }

            #detalle{
                color:#308a17;
                font-family:Cambria;
                font-size:18px;
                margin-top:20px;
                margin-left:200px;
                margin-bottom:60px;
            }
        </style>
    </head>

    <body>
        <header class="encabezado">
            <ul>
                <li>
                    <img src="Icono.jpg" alt="Icono" height="130" width="250">
                    <h1 class="titulo">Concentrador de oxígeno <br />inteligente</h1>
                </li>
                <li>
                    <img src="oxigenoterapiaref.jpg" id="imagenref" alt="imagenref">
                </li>
            </ul>
        </header>

        <div class="divisorSel">
            <h3 id="iniciosesion"> >> Inicio de sesión</h3>
        </div>
        
        <p id="detalle">¡Bienvenido!<br />En esta sección podrá acceder a su cuenta, comprobar el estado de su dispositivo JLife y 
        revisar el historial de los pacientes.</p>
       
        <form method='post' action='PaginaPersonal.php'>
            <div id="UsuarioContraseña">
                <h4 id="ingresoDatos">Ingrese su documento de identidad y su contraseña:</h4>
                <p>Usuario: </p>
                <input type="text" name="Usuario" maxlength="8" />
                <p><br />Contraseña: </p>
                <input type="password" name="Contraseña" />
                <p><br /></p>
                <a href='Paginaaciente.html'><button class="buton buton1">Iniciar sesión</button></a>
                <p><br /></p>
                <a id="olvidado" href="https://www.google.com.pe/">Olvidé la contraseña</a>
                <p><br /></p>
                <a href="Registro.html">Registrarse</a>
                <p><br /><br /></p><p><br /><br /></p><p><br /><br /></p><p><br />
            </div>
        </form>            
    </body>
</html>
