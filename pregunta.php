<?php 
    require_once "php/conexion.php";
    $conexion=conexion();

    $sql="CALL sp_mostrarPregunta_datos";
    $result=mysqli_query($conexion,$sql);
 ?>

                    <?php
                    while ($ver=mysqli_fetch_row($result)):
                    ?>
                        <div id=datos-pregunta>
                            <span style="color: #1c622c4;"><?php echo $ver[1]; ?>: </spam>
                        </div>
                    <?php endwhile; ?>


                       <?php mysqli_close($conexion);
     ?>