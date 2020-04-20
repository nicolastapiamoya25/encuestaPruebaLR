<?php 
	require_once "php/conexion.php";
	$conexion=conexion();

	$sql="CALL sp_tabla_asistencia";
	$result=mysqli_query($conexion,$sql);
 ?>

<div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Rut</th>
                  <th>DV</th>
                  <th>Correo</th>
                  <th>Estado</th>
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
                    <td><?php if($ver[5]==1){
                        echo "No Permitido";
                    }else{
                        echo "Permitido";
                    } ?></td>
                    <td style="text-align: center;">
                        <span class="btn btn-raised btn-success btn-xs" 
                        onclick="obtenDatos('<?php echo $ver[0]; ?>')" data-toggle="modal" data-target="#updatemodal">
                            <span class="fa fa-pencil-square-o"></span> Cambiar Estado
                        </span>
			        </td>
                <?php
                    if($ver[5]==2){
                ?>
                    <td style="text-align: center;">
                        <span class="btn btn-raised btn-info btn-xs" 
                        onclick="obtenDatosCorreo('<?php echo $ver[0]; ?>')" data-toggle="modal" data-target="#envioCorreoModal">
                            <span class="fa fa-pencil-square-o"></span> Enviar Clave Unica
                        </span>
			        </td>
                <?php
                    }
                ?>
                </tr>
                <?php 
                    endwhile;
                ?>
                </tbody>
             </table>
</div>
