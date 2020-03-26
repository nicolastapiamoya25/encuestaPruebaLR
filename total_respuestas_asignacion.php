<?php 
    require_once "php/conexion.php";
    $conexion=conexion();

    $sql="CALL sp_total_encuesta_asignacion";
    $result=mysqli_query($conexion,$sql);
 ?>

                    <?php
                    while ($ver=mysqli_fetch_row($result)):
                    ?>
                        <div id=datos-encuesta>
                            <span style="color: #1c622c4;"><?php echo $ver[0]; ?></spam>
                        </div>
                    <?php endwhile; ?>
                       <?php mysqli_close($conexion);
     ?>