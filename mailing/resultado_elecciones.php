<?php
session_start();
require_once "../php/conexion.php";
// $id_usuario = $_POST['id_usuario'];
$id_usuario = $_SESSION["idUser"];
$conexion = conexion();

$query="CALL sp_mostrar_resultado('$id_usuario')";

$result = mysqli_query($conexion, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="stylesheet" type="text/css" href="../librerias/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../librerias/materialbootstrap/materialicons.css">
    <link rel="stylesheet" type="text/css" href="../librerias/materialbootstrap/bootstrap-material-design.css">
    <link rel="stylesheet" type="text/css" href="../librerias/alertify/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="../librerias/alertify/css/alertify.css">


    <script src="../librerias/jquery-3.2.1.min.js"></script>
    <script src="../librerias/alertify/alertify.js"></script>
    <script src="../librerias/materialbootstrap/popper.js"></script>
    <script src="../librerias/materialbootstrap/bootstrap-material-design.js"></script>

    <title>Resumen Votación Asamblea General Socios 2020</title>
</head>

<style>

    *{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    img {
        width: 30%;
    }

    #tituloitem {
        text-align: left;
        color: #0A3782;
        text-decoration: underline;
        text-underline-position: under;
    }

    #textomail {
        text-align: justify;
        color: #0A3782;
    }

    #footer {
        text-align: center;
        font-family: verdana, arial, helvetica, sans-serif;
        font-size: 11px;
    }

    h3{
        color: #0A3782;
    }
</style>


<body>

<div class="container">

        <div class="col-md-12">

            <img src="../lr.jpg" class="img-fluid" alt="Responsive image">

        </div>
        <br>
        <div class="col-md-12">

            <h3>Estimado socio:</h3>
            <br>
            <p id="textomail">Junto con saludar, concorde a lo dictado por nuestros estamentos, desde el Consejo de Administración de la Cooperativa de Ahorro y Crédito Lautaro Rosas,
                entregamos a ud. el resumen de su votación efectuada el día ?? de ?? de 2020: </p>
                <br>
                <?php
                
                while($r = mysqli_fetch_array($result)):
                    $titulo_votacion   = str_replace("Item ", "", utf8_encode($r['Item']));
                    $item   = utf8_encode($r['Item']);
                    $usuario   = utf8_encode($r['Usuario']);
                    $pregunta  = utf8_encode($r['Pregunta']);
                    $respuesta = utf8_encode($r['Respuesta']);
                    $fecha  = strtotime($r['Fecha']);
                    $diamesano  = date('d-m-Y', $fecha);
                    $hora  = date('H:i', $fecha);
                    ?>
            <h5 id="tituloitem">Votación <?=$titulo_votacion?></h5><br>
            <p id="textomail">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo quia qui et dignissimos, itaque labore magnam soluta architecto, numquam ad quos distinctio incidunt, animi dolor praesentium est suscipit. Iusto, neque. </p>
            
            <p id="textomail"><b>Ud. ha votado lo siguiente: </b> <br> 
            
            Con fecha <?=$diamesano?> a las <?=$hora?> hrs., respecto al <b><?=$item?></b>, se formuló la siguiente pregunta: <b><?=$pregunta?></b> a lo que su votación fue <b><?=$respuesta?></b> .</p>
            <br>
                    <?php
                    endwhile;
                
                ?>
           
            <p id="textomail">Agradecemos su asistencia de antemano, la cual es importante para nosotros y para el
                futuro de
                nuestra cooperativa.
                <br>
                <br>
                Saludos cordiales.
                <br>
                <br>
                Cooperativa de Ahorro y Crédito Lautaro Rosas.
            </p>
            <br>
            <p id="footer">Si no desea recibir más este tipo de mensajes, envíe un mail a <a
                    href="mailto:info@lautarorosas.cl?subject=REMOVER">info@lautarorosas.cl</a> con el asunto REMOVER.
            </p>
        </div>

    </div>

    
</body>
</html>