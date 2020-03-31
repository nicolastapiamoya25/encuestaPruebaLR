<?php 
	require_once "php/conexion.php";
	$conexion=conexion();

	$sql="CALL sp_tabla_datos";
	$result=mysqli_query($conexion,$sql);
 ?>

<div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Usuario</th>
                  <th>Rut</th>
                  <th>Encuesta</th>
                  <th>Pregunta</th>
                  <th>Respuesta</th>
                  <th>Fecha</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                while ($ver=mysqli_fetch_row($result)):
                ?>
                <tr>
                    <td><?php echo $ver[0]; ?></td>
                    <td><?php echo $ver[1]; ?></td>
                    <td><?php echo $ver[2]; ?></td>
                    <td><?php echo $ver[3]; ?></td>
                    <td><?php echo $ver[4]; ?></td>
                    <td><?php echo $ver[5]; ?></td>
                </tr>

                <?php 
                    endwhile;
                ?>
                </tbody>
             </table>
</div>