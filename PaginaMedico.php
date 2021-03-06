<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Pégina médico</title>
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

        .divisorSel {
            clear: both;
            background-color: #91b0cc;
            height: 50px;
        }

        #histPaciente {
            font-family: Arial;
            font-size: 25px;
            color: white;
            padding-top: 10px;
            margin-left: 250px;
        }

        #fondoTabla {
            margin-left: 250px;
            margin-right: 500px;
            margin-top: 20px;
            border-radius: 2px;
            text-align: left;
        }

        #instruccion {
            text-align: left;
            font-family: Arial;
            font-size: 18px;
        }

        #subborde {
            background-color: aquamarine;
            height: 5px;
            margin-top: 0;
            margin-bottom: 25px;
        }

        .buton {
            width: 100px;
            height: 35px;
            text-decoration: none;
            font-family: Verdana;
            font-size: 20px;
            border: none;
            border-radius: 5px;
            background-color: #4cd3e0;
            cursor: pointer;
            transition-duration: 0.4s;
            margin-left: 230px;
            margin-top: 30px;
        }

            .buton:hover {
                background-color: #119098;
            }

        table {
            text-align: right;
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
        <h3 id="histPaciente"> >> Historial de paciente</h3>
    </div>

    <div id="fondoTabla">

        <p id="instruccion">Bienvenido, <br /><br /></p>

        <p id="subborde"></p>
        <p id="instruccion">Ingrese la fecha para acceder al historial médico: <br /><br /></p>

        <table width="500" cellspacing="20">
            <tr>
                <td class="textoRegistro">Fecha de revisión: </td>
                <td><input type="date" name="fecha" height="20" maxlength="20" /></td>
            </tr>

        </table>

        <input class="buton" type="submit" value="Buscar" name="Fecha" />
        <p><br /><br /></p><p><br /><br /></p>
    </div>


</body>
</html>
