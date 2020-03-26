<?php 
    require_once "php/conexion.php";
    $conexion=conexion();

    $sql="CALL sp_mostrar_datos";
    $result=mysqli_query($conexion,$sql);
 ?>

                    <?php
                    while ($ver=mysqli_fetch_row($result)):
                    ?>
                        <div id=datos-chat>
                            <span style="color: #1c622c4;"><?php echo $ver[1]; ?>: </spam>
                            <span style="color: #848484;"><?php echo $ver[2]; ?> </spam>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span style="color: right;"><?php echo formatearFecha($ver[3]); ?> </spam>
                        </div>
                    <?php endwhile; ?>

                       <?php mysqli_close($conexion);
     ?>