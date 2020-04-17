<?php
session_start();
if(isset($_SESSION['username'])){
    $usuario = $_SESSION['username'];
    $to_email = $_SESSION['correo'];
    $subject = "Resultados de votacion en Asamblea General de Socios Lautaro 2020";
    $body = "<h3>Estimado socio: $usuario </h3>
    <br>
    <p>Junto con saludar, concorde a lo dictado por nuestros estamentos, desde el Consejo de Administración de la Cooperativa de Ahorro y Crédito Lautaro Rosas,
        entregamos a ud. el resumen de su votación efectuada el día ?? de ?? de 2020: </p>
        <br>".
  
        while($r = mysqli_fetch_array($result)):
            $titulo_votacion   = str_replace("Item ", "", utf8_encode($r['Item']));
            $item   = utf8_encode($r['Item']);
            $usuario   = utf8_encode($r['Usuario']);
            $pregunta  = utf8_encode($r['Pregunta']);
            $respuesta = utf8_encode($r['Respuesta']);
            $fecha  = strtotime($r['Fecha']);
            $diamesano  = date('d-m-Y', $fecha);
            $hora  = date('H:i', $fecha);


    "<h5 id="tituloitem">Votación <?=$titulo_votacion?></h5><br>
    <p id="textomail">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo quia qui et dignissimos, itaque labore magnam soluta architecto, numquam ad quos distinctio incidunt, animi dolor praesentium est suscipit. Iusto, neque. </p>
    
    <p id="textomail"><b>Ud. ha votado lo siguiente: </b> <br> 
    
    Con fecha <?=$diamesano?> a las <?=$hora?> hrs., respecto al <b><?=$item?></b>, se formuló la siguiente pregunta: <b><?=$pregunta?></b> a lo que su votación fue <b><?=$respuesta?></b> .</p>
    <br>"

            endwhile;
    $headers = "Estimado $usuario";

    if (mail($to_email, $subject, $body, $headers)){
        echo "mail envidado $to_email";
    }else{
        echo "Error al enviar mail $to_email";
    }
}

?>