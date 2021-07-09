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

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES (15192,'John', 30)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "
<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>JLife</title>
    <meta name="author" content="Juan Linares" * />
    <meta name="description" content="Pagina virtual de modelo de concentrador de oxigeno" />
    <meta name="keywords" content="concentrador oxígeno" />
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

        div.sobrelinea {
            clear: both;
            border-top: 2px solid;
            border-top-color: lightgray;
        }

        .pinicial {
            border: 1px solid black;
            text-align: right;
        }

        .titulo {
            padding-bottom: 15px;
            font-family: 'Arial Rounded MT';
            font-size: 25px;
            color: #5293d5;
        }

        .Opcion1 {
            color: darkblue;
            font-family: 'Berlin Sans FB';
            font-size: 20px;
        }

        .Opcion2 {
            color: #6cd139;
            font-family: 'Book Antiqua';
            font-size: 20px;
            font-weight: bolder;
        }

        .Opcion1:hover {
            color: white;
            background-color: #4e4265;
        }

        .Opcion2:hover {
            color: white;
            background-color: #385b39;
        }

        .opciones {
            clear: both;
            margin-top: 10px;
            text-align: center;
            color: snow;
        }

            .opciones li {
                list-style: none;
                display: inline-block;
                width: 200px;
                padding: 20px;
            }

        div.lineadivisora {
            background-color: #a1bcbc;
            height: 20px;
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

    <div class="sobrelinea">
        <menu>
            <ul class="opciones">
                <a href="index.php">
                <li class="Opcion1">Inicio</li></a>
                <a href="Producto.html">
                <li class="Opcion1">Producto</li></a>
                <a href="ManualVirtual.html">
                <li class="Opcion1">Manual Electrónico</li></a>
                <a href="Contacto.html">
                <li class="Opcion1">Contacto</li></a>
                <a href="Logueo.html">
                <li class="Opcion2">Mi JLife</li></a>
            </ul>
        </menu>
    </div>

    <section>
    </section>

</body>
</html>
