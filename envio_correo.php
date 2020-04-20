<?php
session_start()

	require_once "php/conexion.php";
	$conexion=conexion();

	$sql="CALL sp_tabla_asistencia";
	$result=mysqli_query($conexion,$sql);

    while ($ver=mysqli_fetch_row($result)):
 
            $usuario = $ver[1];
            $clave = $ver[8];
            $to_email = $ver[6];
            $subject = "Clave Unica de Acceso Asamblea 2020";
            $body = "Estimado $usuario , su clave unica de acceso es: $clave";
            $headers = "Estimado $usuario";
        
            if (mail($to_email, $subject, $body, $headers)){
                echo "mail envidado $to_email";
            }else{
                echo "Error al enviar mail $to_email";
            }
    endwhile;
?>

