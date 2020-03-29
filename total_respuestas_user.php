<?php 
session_start();
    require_once "php/conexion.php";
    if (isset($_SESSION["idUser"])) {
    $conexion=conexion();
    $usuario=$_SESSION["idUser"];

    $sql="CALL sp_total_respuestas_usuario('$usuario')";
    $result=mysqli_query($conexion,$sql);

                    while ($ver=mysqli_fetch_row($result)):
                    ?>
                        <div id=datos-encuesta>
                            <span style="color: #1c622c4;"><?php echo $ver[0]; ?></spam>
                        </div>
                    <?php endwhile; 
                    mysqli_close($conexion);
}
?>