<?php require_once "dependencias.php"; 
      session_start();
      if(!isset($_SESSION['username'])) {
        header("Location:inicio.php");
      }   
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <title>Lautaro Rosas</title>
  </head>
    <body>
        <div class="container">
         <div class="row">    
            <div class="col-6 col-md-4">
                <img src="lr.jpg" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-6 col-md-4">
            
            </div>
                <div class="col-6 col-md-4">
                  <h5>Bienvenido <?php echo $_SESSION['username']; ?><div id="id_usuario_dato"><?php echo $_SESSION['idUser']; ?></div></h5>
                  <a class="btn btn-raised btn-success" href="cerrar_session.php">Cerrar Sesion</a>
                </div>
          </div> 

          <div class="card-header text-white bg-info text-center">  
            <div class="row justify-content-md-center">
              <div class="col">
                <h2>Junta General de Socios 2020</h2>
              </div>
            </div>
          </div>

          <div class="card-header text-center">  
            <div class="row justify-content-md-center">
              <div class="col">
                <h6>Para responder la encuesta debe seleccionar cada item correspondiente a una encuesta, una vez visto el contenido usted debe dar click en el botón responder y seleccionar su respuesta.</h6>
              </div>
            </div>
          </div></br>
                    <div class="row">
                    <div class="col"></div>
                     <div class="col-6">
                       <div class="embed-responsive embed-responsive-21by9">
                       <iframe src="https://www.youtube.com/embed/izX8e0ha0gs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       </div>
                     </div>
                     <div class="col"></div>
                    </div>

          <div class="row">
            <div class="col">
              <div class="accordion" id="accordionExample">
                      <!--****************************************CARD MEMORIA********************************************-->
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button id="memoria" class="btn btn-raised btn-success " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> 
                      <?php 
                          require_once "php/conexion.php";
                          $conexion=conexion();

                          $sql="select id_encuesta, nombre_encuesta from encuesta where id_encuesta=6";
                          $result=mysqli_query($conexion,$sql);

                          while ($ver=mysqli_fetch_row($result)):
                      ?>
                                          <div id=datos-pregunta>
                                          <div id="id_encuesta_dato_memoria"><?php echo $ver[0]; ?></div><?php echo $ver[1]; ?>
                                          </div>
                      <?php endwhile; 
                      mysqli_close($conexion);
                      ?>
                      </button>
                      
                    </h2>
                  </div>

                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                 <div id="sp_memoria"> <?php 
                          if (isset($_SESSION["idUser"])) {
                          require_once "php/conexion.php";
                          $conexion=conexion();
                          $usuario=strval($_SESSION["idUser"]);
                          $sql="call sp_validar('6','$usuario')";
                          $result=mysqli_query($conexion,$sql);

                          while ($ver=mysqli_fetch_row($result)):
                      ?>
                                          <div id="id_valida_memoria"><?php echo $ver[0]; ?></div>
                      <?php endwhile; 
                      mysqli_close($conexion);
                    }
                      ?></div>
                    <div class="card-body">

                      <div class="row">
                        <div class="col">
                          <div class="embed-responsive embed-responsive-21by9">
                          <iframe src="https://onedrive.live.com/embed?cid=588E29B7B611C0C8&resid=588E29B7B611C0C8%21106&authkey=APocAYiXL64_D2E&em=2" width="402" height="327" frameborder="0" scrolling="no"></iframe>
                            
                          </div>
                        </div>
                      </div>

                       <div id="boton_encuesta_memoria" class="row">
                          <div class="col">
                          <div class="card text-center">
                            <div class="card-header">
                            Memoria
                            </div>
                            <div class="card-body">
                            <h5 class="card-title">Encuesta de presentación memoria anual</h5>
                              <p class="card-text">Precione el botón para responder la encuesta.</p>   
                              <span id="btnResponderEncuestaPrincipalMemoria" class="btn btn-raised btn-primary btn-lg btn-block" data-toggle="modal" data-target="#modalMemoria">
                                <span class="fa fa-plus-circle"></span>Responder Encuesta
                              </span>
                            </div>
                          </div>                         
                          </div>
                       </div>
                  </div>
                </div>
                      <!--****************************************FIN CARD MEMORIA********************************************-->

                      <!--****************************************CARD REMANENTE********************************************-->

                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                      <button id="remanente" class="btn btn-raised btn-success collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <?php 
                          require_once "php/conexion.php";
                          $conexion=conexion();

                          $sql="select id_encuesta, nombre_encuesta from encuesta where id_encuesta=2";
                          $result=mysqli_query($conexion,$sql);

                          while ($ver=mysqli_fetch_row($result)):
                      ?>
                                          <div id=datos-pregunta>
                                          <div id="id_encuesta_dato_remanente"><?php echo $ver[0]; ?></div><?php echo $ver[1]; ?>
                                          </div>
                      <?php endwhile; 
                      mysqli_close($conexion);
                      ?>
                      </button>
                    </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div id="sp_remanente"> <?php 
                          if (isset($_SESSION["idUser"])) {
                          require_once "php/conexion.php";
                          $conexion=conexion();
                          $usuario=strval($_SESSION["idUser"]);
                          $sql="call sp_validar('2','$usuario')";
                          $result=mysqli_query($conexion,$sql);

                          while ($ver=mysqli_fetch_row($result)):
                      ?>
                                          <div id="id_valida_remanente"><?php echo $ver[0]; ?></div>
                      <?php endwhile; 
                      mysqli_close($conexion);
                    }
                      ?></div>
                    <div class="card-body">
                      
                      <div class="row">
                        <div class="col">
                          <div class="embed-responsive embed-responsive-21by9">
                          <iframe src="https://onedrive.live.com/embed?cid=588E29B7B611C0C8&resid=588E29B7B611C0C8%21106&authkey=APocAYiXL64_D2E&em=2" width="402" height="327" frameborder="0" scrolling="no"></iframe>
                          </div>
                        </div>
                      </div>
                      <div id="boton_encuesta_remanente" class="row">
                        <div class="col">
                          <div class="card text-center">
                            <div class="card-header">
                            Encuesta
                            </div>
                            <div class="card-body">
                              <h5 class="card-title">Encuesta de distribucion de remanente</h5>
                              <p class="card-text">Precione el botón para responder la encuesta.</p>                                
                                <span id="btnResponderEncuestaPrincipalRemanente" class="btn btn-raised btn-primary btn-lg btn-block" data-toggle="modal" data-target="#modalRemanente">
                                  <span class="fa fa-plus-circle"></span> Responder Encuesta
                                </span>                               
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                        <!--****************************************FIN CARD REMANENTE********************************************-->

                        <!--****************************************CARD CUOTA********************************************-->
                <div class="card">
                  <div class="card-header" id="headingTree">
                    <h2 class="mb-0">
                      <button id="cuota_social" class="btn btn-raised btn-success collapsed" type="button" data-toggle="collapse" data-target="#collapseTree" aria-expanded="false" aria-controls="collapseTree">
                      <?php 
                          require_once "php/conexion.php";
                          $conexion=conexion();

                          $sql="select id_encuesta, nombre_encuesta from encuesta where id_encuesta=1";
                          $result=mysqli_query($conexion,$sql);

                          while ($ver=mysqli_fetch_row($result)):
                      ?>
                                          <div id=datos-pregunta>
                                          <div id="id_encuesta_dato_cuota"><?php echo $ver[0]; ?></div><?php echo $ver[1]; ?>
                                          </div>
                      <?php endwhile; 
                      mysqli_close($conexion);
                      ?>
                      </button>
                    </h2>
                  </div>
                  <div id="collapseTree" class="collapse" aria-labelledby="headingTree" data-parent="#accordionExample">
                  <div id="sp_cuota"> <?php 
                          if (isset($_SESSION["idUser"])) {
                          require_once "php/conexion.php";
                          $conexion=conexion();
                          $usuario=strval($_SESSION["idUser"]);
                          $sql="call sp_validar('1','$usuario')";
                          $result=mysqli_query($conexion,$sql);

                          while ($ver=mysqli_fetch_row($result)):
                      ?>
                                          <div id="id_valida_cuota"><?php echo $ver[0]; ?></div>
                      <?php endwhile; 
                      mysqli_close($conexion);
                    }
                      ?></div>
                    <div class="card-body">
                      
                      <div class="row">
                        <div class="col">
                          <div class="embed-responsive embed-responsive-21by9">
                          <iframe src="pdf/ing.pdf" allowfullscreen></iframe>
                          </div>
                        </div>
                      </div>

                      <div id="boton_encuesta_cuota" class="row">
                          <div class="col">
                          <div class="card text-center">
                            <div class="card-header">
                            Fijar Cuota Social
                            </div>
                            <div class="card-body">
                            <h5 class="card-title">Encuesta de fijar cuota social</h5>
                              <p class="card-text">Precione el botón para responder la encuesta.</p>   
                              <span id="btnResponderEncuestaPrincipalCuota" class="btn btn-raised btn-primary btn-lg btn-block" data-toggle="modal" data-target="#modalCuotaSocial">
                                <span class="fa fa-plus-circle"></span> Responder Encuesta
                              </span>
                            </div>
                          </div>                         
                          </div>
                       </div>
                    </div>
                  </div>
                </div>
                            
                    <!--****************************************FIN CARD CUOTA********************************************-->

                                
                    <!--****************************************CARD ASIGNACION********************************************-->
             <div class="card">
               <div class="card-header" id="headingford">
                 <h2 class="mb-0">
                   <button id="asignacion_consejero" class="btn btn-raised btn-success collapsed" type="button" data-toggle="collapse" data-target="#collapseford" aria-expanded="false" aria-controls="collapseford">
                   <?php 
                          require_once "php/conexion.php";
                          $conexion=conexion();

                          $sql="select id_encuesta, nombre_encuesta from encuesta where id_encuesta=4";
                          $result=mysqli_query($conexion,$sql);

                          while ($ver=mysqli_fetch_row($result)):
                      ?>
                                          <div id=datos-pregunta>
                                          <div id="id_encuesta_dato_asignacion"><?php echo $ver[0]; ?></div><?php echo $ver[1]; ?>
                                          </div>
                      <?php endwhile; 
                      mysqli_close($conexion);
                      ?>
                   </button>
                 </h2>
               </div>
               <div id="collapseford" class="collapse" aria-labelledby="headingford" data-parent="#accordionExample">
               <div id="sp_asignacion"> <?php 
                          if (isset($_SESSION["idUser"])) {
                          require_once "php/conexion.php";
                          $conexion=conexion();
                          $usuario=strval($_SESSION["idUser"]);
                          $sql="call sp_validar('4','$usuario')";
                          $result=mysqli_query($conexion,$sql);

                          while ($ver=mysqli_fetch_row($result)):
                      ?>
                                          <div id="id_valida_asignacion"><?php echo $ver[0]; ?></div>
                      <?php endwhile; 
                      mysqli_close($conexion);
                    }
                      ?></div>
                 <div class="card-body">
                   <div class="row">
                     <div class="col">
                       <div class="embed-responsive embed-responsive-21by9">
                       <iframe src="pdf/ing.pdf" allowfullscreen></iframe>
                       </div>
                     </div>
                   </div>

                   <div id="boton_encuesta_asignacion" class="row">
                       <div class="col">
                       <div class="card text-center">
                         <div class="card-header">
                         Asignación de Consejeros
                         </div>
                         <div class="card-body">
                         <h5 class="card-title">Encuesta de Asignación de Consejeros</h5>
                           <p class="card-text">Precione el botón para responder la encuesta.</p>   
                           <span id="btnResponderEncuestaPrincipalAsignacion" class="btn btn-raised btn-primary btn-lg btn-block" data-toggle="modal" data-target="#modalAsignacion">
                             <span class="fa fa-plus-circle"></span> Responder Encuesta
                           </span>
                         </div>
                       </div>                         
                       </div>
                   </div>
                 </div>
               </div>
             </div>           
                  <!--****************************************FIN CARD ASIGNACION********************************************-->
                 <!--****************************************CARD AUDITORIA EXTERNA********************************************-->
              <div class="card">
               <div class="card-header" id="headingfive">
                 <h2 class="mb-0">
                   <button id="auditoria_externa" class="btn btn-raised btn-success collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                   <?php 
                          require_once "php/conexion.php";
                          $conexion=conexion();

                          $sql="select id_encuesta, nombre_encuesta from encuesta where id_encuesta=5";
                          $result=mysqli_query($conexion,$sql);

                          while ($ver=mysqli_fetch_row($result)):
                      ?>
                                          <div id=datos-pregunta>
                                          <div id="id_encuesta_dato_auditoria"><?php echo $ver[0]; ?></div><?php echo $ver[1]; ?>
                                          </div>
                      <?php endwhile; 
                      mysqli_close($conexion);
                      ?>
                      
                   </button>
                 </h2>
               </div>
               <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
               <div id="sp_auditoria"> <?php 
                          if (isset($_SESSION["idUser"])) {
                          require_once "php/conexion.php";
                          $conexion=conexion();
                          $usuario=strval($_SESSION["idUser"]);
                          $sql="call sp_validar('5','$usuario')";
                          $result=mysqli_query($conexion,$sql);

                          while ($ver=mysqli_fetch_row($result)):
                      ?>
                                          <div id="id_valida_auditoria"><?php echo $ver[0]; ?></div>
                      <?php endwhile; 
                      mysqli_close($conexion);
                    }
                      ?></div>
                 <div class="card-body">
                   
                   <div class="row">
                     <div class="col">
                       <div class="embed-responsive embed-responsive-21by9">
                       <iframe src="pdf/ing.pdf" allowfullscreen></iframe>
                       </div>
                     </div>
                   </div>

                   <div id="boton_encuesta_auditoria" class="row">
                       <div class="col">
                       <div class="card text-center">
                         <div class="card-header">
                         Auditoria Externa
                         </div>
                         <div class="card-body">
                         <h5 class="card-title">Encuesta de Auditoria Externa</h5>
                           <p class="card-text">Precione el botón para responder la encuesta.</p>   
                           <span id="btnResponderEncuestaPrincipalAuditoria" class="btn btn-raised btn-primary btn-lg btn-block" data-toggle="modal" data-target="#modalAuditoria">
                             <span class="fa fa-plus-circle"></span> Responder Encuesta
                           </span>
                         </div>
                       </div>                         
                       </div>
                   </div>
                 </div>
               </div>
             </div>           
                  <!--****************************************FIN CARD Auditoria Externa********************************************-->
               
              </div>

              <div class="row" id="finalizarEncuesta">
                <div class="col">
                  <div class="card text-center">

                          <div class="card-body">
                          <h5 class="card-title">Finaliza la Encuesta</h5>
                            <p class="card-text">Precione el botón para finalizar la encuesta.</p>   
                            <span class="btn btn-raised btn-primary btn-lg btn-block" id="btnFinalizarEncuesta">
                              <span class="fa fa-plus-circle"></span> Finalizar Encuesta
                            </span>
                          </div>
                        </div>     
                  </div>
              </div>

              <div class="row">
                     <div class="col">
                       <ul class="list-group">
                         <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-success">
                           Respuestas
                           <span class="badge badge-success badge-pill"></span>
                         </li>
                         <li class="list-group-item d-flex justify-content-between align-items-center">
                           Total
                           <span class="badge badge-success badge-pill"><div id="total_user"></div></span>
                         </li>
                         <li class="list-group-item d-flex justify-content-between align-items-center">
                           Positivas
                           <span class="badge badge-success badge-pill"><div id="total_user_si"></div></span>
                         </li>
                         <li class="list-group-item d-flex justify-content-between align-items-center">
                           Negativas
                           <span class="badge badge-success badge-pill"><div id="total_user_no"></div></span>
                         </li>
                       </ul>
                     </div>
                   </div>
            </div>
          </div>
  </div>
              <!--************************************************* fin container ***********************************************-->
 <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">


    <!--************************************************* MODAL ENCUESTA MEMORIA ***********************************************-->
  <div class="modal fade" id="modalMemoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
          <?php 
            $conexion=conexion();

            $sql="select id_pregunta, pregunta from pregunta where encuesta_id_encuesta=6";
            $result=mysqli_query($conexion,$sql);

            while ($ver=mysqli_fetch_row($result)):
            ?>
                                <div id=datos-pregunta>
                                <div id="id_pregunta_dato_memoria"><?php echo $ver[0]; ?></div><?php echo $ver[1]; ?>
                                </div>
            <?php endwhile; 
            mysqli_close($conexion);
            ?>
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="frmEncuestaMemoria">

            <div class="form-group row">                
              <label class="col-sm-2 col-form-label">SI</label>
              <div class="col-sm-6">
                <input type="checkbox" class="form-control form-control-sm group_memoria" value="si" name="si_memoria" id="si_memoria">
              </div>            
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">NO</label>
                <div class="col-sm-6">
                  <input type="checkbox" class="form-control form-control-sm group_memoria" value="no" name="no_memoria" id="no_memoria">
              </div>
            </div>
        
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-raised btn-primary" id="btnResponderMemoria" data-dismiss="modal">Responder</button>
        </div>
      </div>
    </div>
  </div>
  <!--************************************************* FIN MODAL ENCUESTA MEMORIA ***********************************************-->

      <!--************************************************* MODAL ENCUESTA REMANENTE ***********************************************-->
    <div class="modal fade" id="modalRemanente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> 
            <?php 
            $conexion=conexion();

            $sql="select id_pregunta, pregunta from pregunta where encuesta_id_encuesta=2";
            $result=mysqli_query($conexion,$sql);

            while ($ver=mysqli_fetch_row($result)):
            ?>
                            <div id=datos-pregunta>
                            <div id="id_pregunta_dato_remanente"><?php echo $ver[0]; ?></div><?php echo $ver[1]; ?>
                            </div>
            <?php endwhile; 
            mysqli_close($conexion);
            ?>
            </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="frmEncuestaRemanente">

            <div class="form-group row">                
              <label class="col-sm-2 col-form-label">SI</label>
              <div class="col-sm-6">
                <input type="checkbox" class="form-control form-control-sm group_remanente" value="si" name="si_remanente" id="si_remanente">
              </div>            
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">NO</label>
                <div class="col-sm-6">
                  <input type="checkbox" class="form-control form-control-sm group_remanente" value="no" name="no_remanente" id="no_remanente">
              </div>
            </div>
        
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-raised btn-primary" id="btnResponderRemanente" data-dismiss="modal">Responder</button>
        </div>
      </div>
    </div>
  </div>
  <!--************************************************* FIN MODAL ENCUESTA REMANENTE ***********************************************-->

     <!--************************************************* MODAL ENCUESTA CUOTA SOCIAL ***********************************************-->
     <div class="modal fade" id="modalCuotaSocial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
          <?php 
            $conexion=conexion();

            $sql="select id_pregunta, pregunta from pregunta where encuesta_id_encuesta=1";
            $result=mysqli_query($conexion,$sql);

            while ($ver=mysqli_fetch_row($result)):
            ?>
                            <div id=datos-pregunta>
                            <div id="id_pregunta_dato_cuota"><?php echo $ver[0]; ?></div><?php echo $ver[1]; ?>
                            </div>
            <?php endwhile; 
            mysqli_close($conexion);
            ?>
            </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="frmEncuestaCuota">

            <div class="form-group row">                
              <label class="col-sm-2 col-form-label">SI</label>
              <div class="col-sm-6">
                <input type="checkbox" class="form-control form-control-sm group_cuota" value="si" name="si_cuota" id="si_cuota">
              </div>            
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">NO</label>
                <div class="col-sm-6">
                  <input type="checkbox" class="form-control form-control-sm group_cuota" value="no" name="no_cuota" id="no_cuota">
              </div>
            </div>
        
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-raised btn-primary" id="btnResponderCuota" data-dismiss="modal">Responder</button>
        </div>
      </div>
    </div>
  </div>
  <!--************************************************* FIN MODAL ENCUESTA CUOTA SOCIAL ***********************************************-->
      
     <!--************************************************* MODAL ENCUESTA ASIGNACION ***********************************************-->
     <div class="modal fade" id="modalAsignacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
          <?php 
            $conexion=conexion();

            $sql="select id_pregunta, pregunta from pregunta where encuesta_id_encuesta=4";
            $result=mysqli_query($conexion,$sql);

            while ($ver=mysqli_fetch_row($result)):
            ?>
                            <div id=datos-pregunta>
                              <div id="id_pregunta_dato_asignacion"><?php echo $ver[0]; ?></div><?php echo $ver[1]; ?>
                            </div>
            <?php endwhile; 
            mysqli_close($conexion);
            ?>
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="frmEncuestaAsignacion">

            <div class="form-group row">                
              <label class="col-sm-2 col-form-label">SI</label>
              <div class="col-sm-6">
                <input type="checkbox" class="form-control form-control-sm group_asignacion" value="si" name="si_asignacion" id="si_asignacion">
              </div>            
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">NO</label>
                <div class="col-sm-6">
                  <input type="checkbox" class="form-control form-control-sm group_asignacion" value="no" name="no_asignacion" id="no_asignacion">
              </div>
            </div>
        
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-raised btn-primary" id="btnResponderAsignacion" data-dismiss="modal">Responder</button>
        </div>
      </div>
    </div>
  </div>
  <!--************************************************* FIN MODAL ENCUESTA ASIGNACION ***********************************************-->
  

  <!--************************************************* MODAL ENCUESTA AUDITORIA EXTERNA ***********************************************-->
  <div class="modal fade" id="modalAuditoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
          <?php 
            $conexion=conexion();

            $sql="select id_pregunta, pregunta from pregunta where encuesta_id_encuesta=5";
            $result=mysqli_query($conexion,$sql);

            while ($ver=mysqli_fetch_row($result)):
            ?>
                                <div id=datos-pregunta>
                                <div id="id_pregunta_dato_auditoria"><?php echo $ver[0]; ?></div><?php echo $ver[1]; ?>
                                </div>
            <?php endwhile; 
            mysqli_close($conexion);
            ?>
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="frmEncuestaAuditoria">

            <div class="form-group row">                
              <label class="col-sm-2 col-form-label">SI</label>
              <div class="col-sm-6">
                <input type="checkbox" class="form-control form-control-sm group_auditoria" value="si" name="si_auditoria" id="si_auditoria">
              </div>            
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">NO</label>
                <div class="col-sm-6">
                  <input type="checkbox" class="form-control form-control-sm group_auditoria" value="no" name="no_auditoria" id="no_auditoria">
              </div>
            </div>
        
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-raised btn-primary" id="btnResponderAuditoria" data-dismiss="modal">Responder</button>
        </div>
      </div>
    </div>
  </div>
  <!--************************************************* FIN MODAL ENCUESTA AUDITORIA EXTERNA ***********************************************-->
           
  <!--************************************************* MODAL ENCUESTA AVISO ***********************************************-->
  <div class="modal fade" id="modalAviso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Introducción</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                    <div class="row">
                     <div class="col">
                       <div class="embed-responsive embed-responsive-21by9">
                       <iframe src="https://www.youtube.com/embed/izX8e0ha0gs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       </div>
                     </div>
                   </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

        </div>
      </div>
    </div>
  </div>
  <!--************************************************* FIN MODAL AVISO ***********************************************-->
              
            </div>
        </div>
    </div>
 </div>
    </div>
    </body>
</html>
<script  type="text/javascript">
    $(document).ready(function(){

        $('#modalAviso').modal('toggle');
        $.ajaxSetup({"cache":false});
        //setInterval("loadOldMessages()",100);
        $('#id_usuario_dato').hide();
        //$('#finalizarEncuesta').hide();

        $('#total_user').load('total_respuestas_user.php');
        $('#total_user_si').load('total_respuestas_user_si.php');
        $('#total_user_no').load('total_respuestas_user_no.php');

        /*intervalo por segudo si el usuario tiene las 5 preguntas contestadas o no*/
        setInterval("validacionFinalizarEncuesta()",1000);

        /***********memoria********/
        setInterval("loadTotalUser()",1000);
        setInterval("loadTotalUserSi()",1000);
        setInterval("loadTotalUserNo()",1000);  
        $('#id_encuesta_dato_memoria').hide();
        $('#id_pregunta_dato_memoria').hide();
        $('#id_valida_memoria').hide();
        $('#sp_memoria').hide();
        
        $('#memoria').click(function(){
        var id_valida_memoria = $('#id_valida_memoria').text();
        var id_valida_memoria = $.trim(id_valida_memoria);
        var id_valida_memoria = parseInt(id_valida_memoria);
        //console.log(id_valida_memoria);
        if(id_valida_memoria==1){
          alertify.error("Usted ya respondió esta encuesta");
          $('#boton_encuesta_memoria').hide();
        }
        });

        $('#btnResponderEncuestaPrincipalMemoria').click(function(){
            $('#si_memoria').prop('checked', false);
            $('#no_memoria').prop('checked', false);
            $('#si_memoria').show();
            $('#no_memoria').show();
        });
 
        /***********remanente********/
        $('#id_encuesta_dato_remanente').hide();
        $('#id_pregunta_dato_remanente').hide();
        $('#id_valida_remanente').hide();
        $('#sp_remanente').hide();
    
        $('#remanente').click(function(){
        var id_valida_remanente = $('#id_valida_remanente').text();
        var id_valida_remanente = $.trim(id_valida_remanente);
        var id_valida_remanente = parseInt(id_valida_remanente);
        //console.log(id_valida_remanente);
        if(id_valida_remanente==1){
          alertify.error("Usted ya respondió esta encuesta");
          $('#boton_encuesta_remanente').hide();
        }
        });
        
        $('#btnResponderEncuestaPrincipalRemanente').click(function(){
            $('#si_remanente').prop('checked', false);
            $('#no_remanente').prop('checked', false);
            $('#si_remanente').show();
            $('#no_remanente').show();
        });
        
        /***********cuota social********/
        $('#id_encuesta_dato_cuota').hide();
        $('#id_pregunta_dato_cuota').hide();
        $('#id_valida_cuota').hide();
        $('#sp_cuota').hide();
        
        $('#cuota_social').click(function(){
        var id_valida_cuota = $('#id_valida_cuota').text();
        var id_valida_cuota = $.trim(id_valida_cuota);
        var id_valida_cuota = parseInt(id_valida_cuota);
        //console.log(id_valida_cuota);
        if(id_valida_cuota==1){
          alertify.error("Usted ya respondió esta encuesta");
          $('#boton_encuesta_cuota').hide();
        }
        });

        $('#btnResponderEncuestaPrincipalCuota').click(function(){
            $('#si_cuota').prop('checked', false);
            $('#no_cuota').prop('checked', false);
            $('#si_cuota').show();
            $('#no_cuota').show();
        });
      
        /***********asignacion********/
        $('#id_encuesta_dato_asignacion').hide();
        $('#id_pregunta_dato_asignacion').hide();
        $('#id_valida_asignacion').hide();
        $('#sp_asignacion').hide();
    
        $('#asignacion_consejero').click(function(){
        var id_valida_asignacion = $('#id_valida_asignacion').text();
        var id_valida_asignacion = $.trim(id_valida_asignacion);
        var id_valida_asignacion = parseInt(id_valida_asignacion);
        //console.log(id_valida_asignacion);
        if(id_valida_asignacion==1){
          alertify.error("Usted ya respondió esta encuesta");
          $('#boton_encuesta_asignacion').hide();
        }
        });

        $('#btnResponderEncuestaPrincipalAsignacion').click(function(){
            $('#si_asignacion').prop('checked', false);
            $('#no_asignacion').prop('checked', false);
            $('#si_asignacion').show();
            $('#no_asignacion').show();
        });

        /***********aditoria externa********/
        $('#id_encuesta_dato_auditoria').hide();
        $('#id_pregunta_dato_auditoria').hide();
        $('#id_valida_auditoria').hide();
        $('#sp_auditoria').hide();

        $('#auditoria_externa').click(function(){
        var id_valida_auditoria = $('#id_valida_auditoria').text();
        var id_valida_auditoria = $.trim(id_valida_auditoria);
        var id_valida_auditoria = parseInt(id_valida_auditoria);
        //console.log(id_valida_auditoria);
        if(id_valida_auditoria==1){
          alertify.error("Usted ya respondió esta encuesta");
          $('#boton_encuesta_auditoria').hide();
        }
        });

        $('#btnResponderEncuestaPrincipalAuditoria').click(function(){
            $('#si_auditoria').prop('checked', false);
            $('#no_auditoria').prop('checked', false);
            $('#si_auditoria').show();
            $('#no_auditoria').show();
        });
    });

    var validacionFinalizarEncuesta=function(){
        var total_valida = $('#total_user').text();
        var total_valida = $.trim(total_valida);
        var total_valida = parseInt(total_valida);
        //console.log(total_valida);
        if(total_valida>4){
          $('#finalizarEncuesta').show();
        }else{
          $('#finalizarEncuesta').hide();
        }
    }

    // total user
    var loadTotalUser=function(){
        $.ajax({type: "POST",
            url: "total_respuestas_user.php"
        }).done(function( info ){
            $("#total_user").html( info );
        });
    }

    // total user si
    var loadTotalUserSi=function(){
        $.ajax({type: "POST",
            url: "total_respuestas_user_si.php"
        }).done(function( info ){
            $("#total_user_si").html( info );
        });
    }
    
    // total user no
    var loadTotalUserNo=function(){
        $.ajax({type: "POST",
            url: "total_respuestas_user_no.php"
        }).done(function( info ){
            $("#total_user_no").html( info );
        });
    }


</script>

<script type="text/javascript">
  function validarFormVacio(formulario){
    datos=$('#' + formulario).serialize();
    d=datos.split('&');
    vacios=0;
    for(i=0;i< d.length;i++){
      controles=d[i].split("=");
      if(controles[1]=="A" || controles[1]==""){
        vacios++;
      }
    }
    return vacios;
  }
</script>

<!--*******************************JS CHAT**************************************-->
<!-- <script type="text/javascript">
    $(document).ready(function(){
        $('#chatstore').load('chat.php');
    $('#enviar').click(function(){
      if(validarFormVacio('frmAgregaMensaje') > 0){
        alertify.alert("Debes llenar todos los campos por favor!");
        return false;
      }
      datos=$('#frmAgregaMensaje').serialize();
      $.ajax({
        type:"POST",
        data:datos,
        url:"php/insertar.php",
        success:function(r){
          if(r==1){
           $('#frmAgregaMensaje')[0].reset();
           $('#chatstore').load('chat.php');
           alertify.success("Mensaje agregado:)"); 
           $.ajaxSetup({"cache":false});
            setInterval("loadOldMessages()",500);        
         }else{
          alertify.error("No se pudo agregar mensaje:(");
        }
      }
    });
    });
  });
    var loadOldMessages=function(){
        $.ajax({type: "POST",
            url: "chat.php"
        }).done(function( info ){
            $("#chatstore").html( info );
        });
    }
</script> -->
<!--*******************************FIN JS CHAT**************************************-->

<!--*******************************JS MODAL ENCUESTA MEMORIA**************************************-->
<script type="text/javascript">
$(document).ready(function(){
    //carga en elemento encuesta el script en php
    //$('#encuestaMemoria').load('pregunta.php');
    //$('#encuesta2').load('pregunta.php');
      //escucha el elemto 'si'
      $('#si_memoria').on( 'change', function() {
        //si el elemento 'si' esta checkeado (truwe)
        if( $(this).is(':checked') ) {
        // Hacer que se escondan los checkbox
            $('#no_memoria').hide();
        } else {
            // Hacer aparecer los checkbox
            $('#no_memoria').show();
            $('#si_memoria').show();
            //limpia los elementos group1
            $('.group_memoria').trigger('change');
        }
        });

      $('#no_memoria').on( 'change', function() {
        if( $(this).is(':checked') ) {
        // Hacer que se escondan los checkbox
            $('#si_memoria').hide();
        } else {
            // Hacer aparecer los checkbox
            $('#si_memoria').show();
            $('#no_memoria').show();
            //limpia los elementos group1
        $('.group_memoria').trigger('change');
        }
        });

    $('#btnResponderMemoria').click(function(){
        //al precionar boton responder 
      var id_encuesta = $('#id_encuesta_dato_memoria').text();
      var id_encuesta = $.trim(id_encuesta);
      var id_encuesta = parseInt(id_encuesta);
        //declaro variable arreglo de respuesta (respuesta)
      var respuesta = [];
        //declaro variable y almaceno texto de encuesta (pregunta)
      var id_pregunta = $('#id_pregunta_dato_memoria').text();
      //limpio el string sacando los espacios en blanco
      var id_pregunta = $.trim(id_pregunta);
      var id_pregunta = parseInt(id_pregunta);

      var id_usuario = $('#id_usuario_dato').text();
      var id_usuario = $.trim(id_usuario);
      var id_usuario = parseInt(id_usuario);
      //busca en los elementos group1
      $('.group_memoria').each(function(){
        //si hay uno checkeado
        if ($(this).is(":checked")) {
            //guarda su valor en variable respuesta
            respuesta.push($(this).val());
        }
      });
      respuesta = respuesta.toString();
      if (respuesta == "") {
        alertify.error("Debe responder la encuesta");
      }else{
        alertify.confirm('!Alerta¡', '¿Usted está seguro de su Respuesta?', 
          function(){ 
            $.ajax({
                type:"POST",
                data:{respuesta:respuesta, id_pregunta:id_pregunta, id_encuesta:id_encuesta, id_usuario:id_usuario},
                url:"php/insertarEncuesta.php",
                success:function(r){
                if(r==1){
                  $('#frmEncuestaMemoria')[0].reset();
                  alertify.success("Respuesta Enviada");
                  $('#boton_encuesta_memoria').hide();             
                    }else{
                        alertify.error("Respuesta No Enviada");
                    }           
                }
            });
          },function(){ 
                  alertify.error('Cancelo');
                });
        $('.group_memoria').trigger('change');
        $('#modalMemoria').remove();
      } 
    });
  });
</script>
<!--*******************************FIN JS MODAL ENCUESTA MEMORIA**************************************-->

<!--*******************************JS MODAL ENCUESTA REMANENTE**************************************-->
<script type="text/javascript">
$(document).ready(function(){
    //carga en elemento encuesta el script en php
    //$('#encuestaRemanente').load('pregunta.php');
    //$('#encuesta2').load('pregunta.php');
      //escucha el elemto 'si'
      $('#si_remanente').on( 'change', function() {
        //si el elemento 'si' esta checkeado (truwe)
        if( $(this).is(':checked') ) {
        // Hacer que se escondan los checkbox
            $('#no_remanente').hide();
        } else {
            // Hacer aparecer los checkbox
            $('#no_remanente').show();
            $('#si_remanente').show();
            //limpia los elementos group1
            $('.group_remanente').trigger('change');
        }
        });

      $('#no_remanente').on( 'change', function() {
        if( $(this).is(':checked') ) {
        // Hacer que se escondan los checkbox
            $('#si_remanente').hide();
        } else {
            // Hacer aparecer los checkbox
            $('#si_remanente').show();
            $('#no_remanente').show();
            //limpia los elementos group1
        $('.group_remanente').trigger('change');
        }
        });

    $('#btnResponderRemanente').click(function(){
        //al precionar boton responder 
        var id_encuesta = $('#id_encuesta_dato_remanente').text();
        var id_encuesta = $.trim(id_encuesta);
        var id_encuesta = parseInt(id_encuesta);
          //declaro variable arreglo de respuesta (respuesta)
        var respuesta = [];
          //declaro variable y almaceno texto de encuesta (pregunta)
        var id_pregunta = $('#id_pregunta_dato_remanente').text();
        //limpio el string sacando los espacios en blanco
        var id_pregunta = $.trim(id_pregunta);
        var id_pregunta = parseInt(id_pregunta);

        var id_usuario = $('#id_usuario_dato').text();
        var id_usuario = $.trim(id_usuario);
        var id_usuario = parseInt(id_usuario);
      //busca en los elementos group1
      $('.group_remanente').each(function(){
        //si hay uno checkeado
        if ($(this).is(":checked")) {
            //guarda su valor en variable respuesta
            respuesta.push($(this).val());
        }
      });
      respuesta = respuesta.toString();
      if (respuesta == "") {
        alertify.error("Debe responder la encuesta");
      }else{
        alertify.confirm('!Alerta¡', '¿Usted está seguro de su Respuesta?', 
          function(){ 
            $.ajax({
                type:"POST",
                data:{respuesta:respuesta, id_pregunta:id_pregunta, id_encuesta:id_encuesta, id_usuario:id_usuario},
                url:"php/insertarEncuesta.php",
                success:function(r){
                if(r==1){
                  $('#frmEncuestaRemanente')[0].reset();
                  alertify.success("Respuesta Enviada");
                  $('#boton_encuesta_remanente').hide();        
                    }else{
                        alertify.error("Respuesta No Enviada");
                    }           
                }
            });
          },function(){ 
                  alertify.error('Cancelo');
                });
        $('.group_remanente').trigger('change');
        $('#modalRemanente').remove();
      }  
    });
  });
</script>
<!--*******************************FIN JS MODAL ENCUESTA REMANENTE**************************************-->

<!--*******************************JS MODAL ENCUESTA CUOTA**************************************-->
<script type="text/javascript">
$(document).ready(function(){
    //carga en elemento encuesta el script en php
    //$('#encuestaCuota').load('pregunta.php');
    //$('#encuesta2').load('pregunta.php');
      //escucha el elemto 'si'
      $('#si_cuota').on( 'change', function() {
        //si el elemento 'si' esta checkeado (truwe)
        if( $(this).is(':checked') ) {
        // Hacer que se escondan los checkbox
            $('#no_cuota').hide();
        } else {
            // Hacer aparecer los checkbox
            $('#no_cuota').show();
            $('#si_cuota').show();
            //limpia los elementos group1
            $('.group_cuota').trigger('change');
        }
        });

      $('#no_cuota').on( 'change', function() {
        if( $(this).is(':checked') ) {
        // Hacer que se escondan los checkbox
            $('#si_cuota').hide();
        } else {
            // Hacer aparecer los checkbox
            $('#si_cuota').show();
            $('#no_cuota').show();
            //limpia los elementos group1
        $('.group_cuota').trigger('change');
        }
        });
      
    $('#btnResponderCuota').click(function(){
        //al precionar boton responder 
        var id_encuesta = $('#id_encuesta_dato_cuota').text();
        var id_encuesta = $.trim(id_encuesta);
        var id_encuesta = parseInt(id_encuesta);
          //declaro variable arreglo de respuesta (respuesta)
        var respuesta = [];
          //declaro variable y almaceno texto de encuesta (pregunta)
        var id_pregunta = $('#id_pregunta_dato_cuota').text();
        //limpio el string sacando los espacios en blanco
        var id_pregunta = $.trim(id_pregunta);
        var id_pregunta = parseInt(id_pregunta);

        var id_usuario = $('#id_usuario_dato').text();
        var id_usuario = $.trim(id_usuario);
        var id_usuario = parseInt(id_usuario);
      //busca en los elementos group1
      $('.group_cuota').each(function(){
        //si hay uno checkeado
        if ($(this).is(":checked")) {
            //guarda su valor en variable respuesta
            respuesta.push($(this).val());
        }
      });
      respuesta = respuesta.toString();
      if (respuesta == "") {
        alertify.error("Debe responder la encuesta");
      }else{
        alertify.confirm('!Alerta¡', '¿Usted está seguro de su Respuesta?', 
          function(){
            $.ajax({
                type:"POST",
                data:{respuesta:respuesta, id_pregunta:id_pregunta, id_encuesta:id_encuesta, id_usuario:id_usuario},
                url:"php/insertarEncuesta.php",
                success:function(r){
                if(r==1){
                  $('#frmEncuestaCuota')[0].reset();
                  alertify.success("Respuesta Enviada");
                  $('#boton_encuesta_cuota').hide();        
                    }else{
                        alertify.error("Respuesta No Enviada");
                    }           
                }
            });
          },function(){ 
                  alertify.error('Cancelo');
                });
        $('.group_cuota').trigger('change');
        $('#modalCuotaSocial').remove();
      }  
    });
  });
</script>
<!--*******************************FIN JS MODAL ENCUESTA CUOTA**************************************-->

<!--*******************************JS MODAL ENCUESTA ASIGNACION**************************************-->
<script type="text/javascript">
$(document).ready(function(){
    //carga en elemento encuesta el script en php
    //$('#encuestaAsignacion').load('pregunta.php');
    //$('#encuesta2').load('pregunta.php');
      //escucha el elemto 'si'
      $('#si_asignacion').on( 'change', function() {
        //si el elemento 'si' esta checkeado (truwe)
        if( $(this).is(':checked') ) {
        // Hacer que se escondan los checkbox
            $('#no_asignacion').hide();
        } else {
            // Hacer aparecer los checkbox
            $('#si_asignacion').show();
            $('#no_asignacion').show();
            //limpia los elementos group1
            $('.group_asignacion').trigger('change');
        }
        });

      $('#no_asignacion').on( 'change', function() {
        if( $(this).is(':checked') ) {
        // Hacer que se escondan los checkbox
            $('#si_asignacion').hide();
        } else {
            // Hacer aparecer los checkbox
            $('#si_asignacion').show();
            $('#no_asignacion').show();
            //limpia los elementos group1
        $('.group_asignacion').trigger('change');
        }
        });
      
    $('#btnResponderAsignacion').click(function(){
        //al precionar boton responder 
        var id_encuesta = $('#id_encuesta_dato_asignacion').text();
        var id_encuesta = $.trim(id_encuesta);
        var id_encuesta = parseInt(id_encuesta);
          //declaro variable arreglo de respuesta (respuesta)
        var respuesta = [];
          //declaro variable y almaceno texto de encuesta (pregunta)
        var id_pregunta = $('#id_pregunta_dato_asignacion').text();
        //limpio el string sacando los espacios en blanco
        var id_pregunta = $.trim(id_pregunta);
        var id_pregunta = parseInt(id_pregunta);

        var id_usuario = $('#id_usuario_dato').text();
        var id_usuario = $.trim(id_usuario);
        var id_usuario = parseInt(id_usuario);
      //busca en los elementos group1
      $('.group_asignacion').each(function(){
        //si hay uno checkeado
        if ($(this).is(":checked")) {
            //guarda su valor en variable respuesta
            respuesta.push($(this).val());
        }
      });
      respuesta = respuesta.toString();
      if (respuesta == "") {
        alertify.error("Debe responder la encuesta");
      }else{
        alertify.confirm('!Alerta¡', '¿Usted está seguro de su Respuesta?', 
          function(){
              $.ajax({
                  type:"POST",
                  data:{respuesta:respuesta, id_pregunta:id_pregunta, id_encuesta:id_encuesta, id_usuario:id_usuario},
                  url:"php/insertarEncuesta.php",
                  success:function(r){
                  if(r==1){
                    $('#frmEncuestaAsignacion')[0].reset();
                    alertify.success("Respuesta Enviada"); 
                    $('#boton_encuesta_asignacion').hide();         
                      }else{
                          alertify.error("Respuesta No Enviada");
                      }           
                  }
              });
            },function(){ 
                  alertify.error('Cancelo');
                });
        $('.group_asignacion').trigger('change');
        $('#modalAsignacion').remove();
      }  
    });
  });
</script>
  <!--*******************************FIN JS MODAL ENCUESTA ASIGNACION**************************************-->

<!--*******************************JS MODAL ENCUESTA AUDITORIA**************************************-->
<script type="text/javascript">
$(document).ready(function(){
    //carga en elemento encuesta el script en php
    //$('#encuestaMemoria').load('pregunta.php');
    //$('#encuesta2').load('pregunta.php');
      //escucha el elemto 'si'
      $('#si_auditoria').on( 'change', function() {
        //si el elemento 'si' esta checkeado (truwe)
        if( $(this).is(':checked') ) {
        // Hacer que se escondan los checkbox
            $('#no_auditoria').hide();
        } else {
            // Hacer aparecer los checkbox
            $('#no_auditoria').show();
            $('#si_auditoria').show();
            //limpia los elementos group1
            $('.group_auditoria').trigger('change');
        }
        });

      $('#no_auditoria').on( 'change', function() {
        if( $(this).is(':checked') ) {
        // Hacer que se escondan los checkbox
            $('#si_auditoria').hide();
        } else {
            // Hacer aparecer los checkbox
            $('#si_auditoria').show();
            $('#no_auditoria').show();
            //limpia los elementos group1
        $('.group_auditoria').trigger('change');
        }
        });
      
    $('#btnResponderAuditoria').click(function(){
        //al precionar boton responder 
      var id_encuesta = $('#id_encuesta_dato_auditoria').text();
      var id_encuesta = $.trim(id_encuesta);
      var id_encuesta = parseInt(id_encuesta);
        //declaro variable arreglo de respuesta (respuesta)
      var respuesta = [];
        //declaro variable y almaceno texto de encuesta (pregunta)
      var id_pregunta = $('#id_pregunta_dato_auditoria').text();
      //limpio el string sacando los espacios en blanco
      var id_pregunta = $.trim(id_pregunta);
      var id_pregunta = parseInt(id_pregunta);

      var id_usuario = $('#id_usuario_dato').text();
      var id_usuario = $.trim(id_usuario);
      var id_usuario = parseInt(id_usuario);
      //busca en los elementos group1
      $('.group_auditoria').each(function(){
        //si hay uno checkeado
        if ($(this).is(":checked")) {
            //guarda su valor en variable respuesta
            respuesta.push($(this).val());
        }
      });
      respuesta = respuesta.toString();
      if (respuesta == "") {
        alertify.error("Debe responder la encuesta");
      }else{
        alertify.confirm('!Alerta¡', '¿Usted está seguro de su Respuesta?', 
          function(){
              $.ajax({
                  type:"POST",
                  data:{respuesta:respuesta, id_pregunta:id_pregunta, id_encuesta:id_encuesta, id_usuario:id_usuario},
                  url:"php/insertarEncuesta.php",
                  success:function(r){
                  if(r==1){
                    $('#frmEncuestaAuditoria')[0].reset();
                    alertify.success("Respuesta Enviada");
                    $('#boton_encuesta_auditoria').hide();               
                      }else{
                          alertify.error("Respuesta No Enviada");
                      }           
                  }
              });
            },function(){ 
                  alertify.error('Cancelo');
                });
        $('.group_auditoria').trigger('change');
        $('#modalAuditoria').remove();
      }  
    });
  });

</script>
<!--*******************************FIN JS MODAL ENCUESTA AUDITORIA**************************************-->

<!--*******************************ENVIO CORREO**************************************-->
<script>
  $(document).ready(function() {

    var id_usuario = $('#id_usuario_dato').val();
    var id_usuario = $.trim(id_usuario);
    var id_usuario = parseInt(id_usuario);

    $('#btnFinalizarEncuesta').click(function() {
      $.ajax({
        type: "POST",
        data: {
            id_usuario: id_usuario
          },
        url: "mailing/resultado_elecciones.php"
      }).done(function(info) {
        // $("#btnFinalizarEncuesta").html(info);
        window.location.href = "mailing/resultado_elecciones.php";
      });
    });
  });
</script>
<!--*******************************FIN ENVIO CORREO**************************************-->
 