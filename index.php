<?php require_once "dependencias.php"; 
      session_start();    
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <title>Lautaro Rosas Video</title>
	
  </head>
    <body>
        <div class="container">
         <div class="row">    
            <div class="col">
		          <img src="lr.jpg" class="img-fluid" alt="Responsive image">
            </div> 
          </div>   
          <div class="row justify-content-md-center">
            <div class="col-md-auto">
		          <h1>Junta General de Socios 2020</h1>
            </div>
            <div class="col-md-auto">
		          <h3>Bienvenido <?php echo $_SESSION['username']; ?><div id="id_usuario_dato"><?php echo $_SESSION['idUser']; ?></div></h3>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="accordion" id="accordionExample">
                      <!--****************************************CARD MEMORIA********************************************-->
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button id="memoria" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> 
                      <?php 
                          require_once "php/conexion.php";
                          $conexion=conexion();

                          $sql="select id_encuesta, nombre_encuesta from encuesta where id_encuesta=3";
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
                    <div class="card-body">

                      <div class="row">
                        <div class="col">
                          <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="https://www.youtube.com/embed/YZi5vam33ow" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>
                        </div>
                      </div>

                       <div class="row">
                          <div class="col">
                          <div class="card text-center">
                            <div class="card-header">
                            Memoria
                            </div>
                            <div class="card-body">
                            <h5 class="card-title">Encuesta de presentación memoria anual</h5>
                              <p class="card-text">Preciona el botón para responder la encuesta.</p>   
                              <span class="btn btn-raised btn-success btn-lg" data-toggle="modal" data-target="#modalMemoria">
                                <span class="fa fa-plus-circle"></span> Encuesta Memoria
                              </span>
                            </div>
                          </div>                         
                          </div>
                       </div>

                      <div class="row">
                        <div class="col">
                          <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-success">
                              Total Respuestas Socios
                              <span class="badge badge-success badge-pill"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Total
                              <span class="badge badge-success badge-pill"><div id="total_memoria"></div></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Positivas
                              <span class="badge badge-success badge-pill"><div id="total_si_memoria"></div></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Negativas
                              <span class="badge badge-success badge-pill"><div id="total_no_memoria"></div></span>
                            </li>
                          </ul>
                        </div>
                      </div>

                  </div>
                </div>
                      <!--****************************************FIN CARD MEMORIA********************************************-->

                      <!--****************************************CARD REMANENTE********************************************-->

                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                      <button id="remanente" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
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
                    <div class="card-body">
                      
                      <div class="row">
                        <div class="col">
                          <div class="embed-responsive embed-responsive-16by9">
                          <iframe src="https://www.youtube.com/embed/YZi5vam33ow" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="card text-center">
                            <div class="card-header">
                            Encuesta
                            </div>
                            <div class="card-body">
                              <h5 class="card-title">Encuesta de distribucion de remanente</h5>
                              <p class="card-text">Preciona el botón para responder la encuesta.</p>                                
                                <span class="btn btn-raised btn-success btn-lg" data-toggle="modal" data-target="#modalRemanente">
                                  <span class="fa fa-plus-circle"></span> Encuesta Remanente
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
                              <span class="badge badge-success badge-pill"><div id="total_remanente"></div></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Positivas
                              <span class="badge badge-success badge-pill"><div id="total_si_remanente"></div></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Negativas
                              <span class="badge badge-success badge-pill"><div id="total_no_remanente"></div></span>
                            </li>
                          </ul>
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
                      <button id="cuota_social" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTree" aria-expanded="false" aria-controls="collapseTree">
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
                    <div class="card-body">
                      
                      <div class="row">
                        <div class="col">
                          <div class="embed-responsive embed-responsive-16by9">
                          <iframe src="https://www.youtube.com/embed/YZi5vam33ow" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                          <div class="col">
                          <div class="card text-center">
                            <div class="card-header">
                            Fijar Cuota Social
                            </div>
                            <div class="card-body">
                            <h5 class="card-title">Encuesta de fijar cuota social</h5>
                              <p class="card-text">Preciona el botón para responder la encuesta.</p>   
                              <span class="btn btn-raised btn-success btn-lg" data-toggle="modal" data-target="#modalCuotaSocial">
                                <span class="fa fa-plus-circle"></span> Encuesta Cuota Social
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
                              <span class="badge badge-success badge-pill"><div id="total_cuota"></div></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Positivas
                              <span class="badge badge-success badge-pill"><div id="total_si_cuota"></div></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Negativas
                              <span class="badge badge-success badge-pill"><div id="total_no_cuota"></div></span>
                            </li>
                          </ul>
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
                   <button id="asignacion_consejero" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseford" aria-expanded="false" aria-controls="collapseford">
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
                 <div class="card-body">
                   
                   <div class="row">
                     <div class="col">
                       <div class="embed-responsive embed-responsive-16by9">
                       <iframe src="https://www.youtube.com/embed/YZi5vam33ow" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       </div>
                     </div>
                   </div>

                   <div class="row">
                       <div class="col">
                       <div class="card text-center">
                         <div class="card-header">
                         Asignación de Consejeros
                         </div>
                         <div class="card-body">
                         <h5 class="card-title">Encuesta de Asignación de Consejeros</h5>
                           <p class="card-text">Preciona el botón para responder la encuesta.</p>   
                           <span class="btn btn-raised btn-success btn-lg" data-toggle="modal" data-target="#modalAsignacion">
                             <span class="fa fa-plus-circle"></span> Encuesta Asignación de Consejeros
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
                           <span class="badge badge-success badge-pill"><div id="total_asignacion"></div></span>
                         </li>
                         <li class="list-group-item d-flex justify-content-between align-items-center">
                           Positivas
                           <span class="badge badge-success badge-pill"><div id="total_si_asignacion"></div></span>
                         </li>
                         <li class="list-group-item d-flex justify-content-between align-items-center">
                           Negativas
                           <span class="badge badge-success badge-pill"><div id="total_no_asignacion"></div></span>
                         </li>
                       </ul>
                     </div>
                   </div>
                 </div>
               </div>
             </div>           
                  <!--****************************************FIN CARD ASIGNACION********************************************-->

               
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
                           <span class="badge badge-success badge-pill"><div id="total_si_user"></div></span>
                         </li>
                         <li class="list-group-item d-flex justify-content-between align-items-center">
                           Negativas
                           <span class="badge badge-success badge-pill"><div id="total_no_user"></div></span>
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

            $sql="select id_pregunta, pregunta from pregunta where encuesta_id_encuesta=3";
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
          <button type="button" class="btn btn-raised btn-primary" id="btnResponderMemoria">Responder</button>
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
          <button type="button" class="btn btn-raised btn-primary" id="btnResponderRemanente">Responder</button>
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
          <button type="button" class="btn btn-raised btn-primary" id="btnResponderCuota">Responder</button>
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
          <button type="button" class="btn btn-raised btn-primary" id="btnResponderAsignacion">Responder</button>
        </div>
      </div>
    </div>
  </div>
  <!--************************************************* FIN MODAL ENCUESTA ASIGNACION ***********************************************-->
     
           
           
            </div>
        </div>
    </div>
 </div>
    </div>
    </body>
</html>
<script>
    $(document).ready(function(){
        $.ajaxSetup({"cache":false});
        //setInterval("loadOldMessages()",100);
        $('#id_usuario_dato').hide();
        
        /***********memoria********/
        setInterval("loadTotalMemoria()",100);
        setInterval("loadSiMemoria()",100); 
        setInterval("loadNoMemoria()",100);
        setInterval("loadTotalUser()",100);  
        //$('#encuestaMemoria').load('pregunta.php');
        $('#total_memoria').load('total_respuestas_memoria.php');
        $('#total_si_memoria').load('total_respuesta_si_memoria.php');
        $('#total_no_memoria').load('total_respuesta_no_memoria.php');
        $('#id_encuesta_dato_memoria').hide();
        $('#id_pregunta_dato_memoria').hide();
        $('#total_user').load('total_respuestas_user.php');
        
        
        /***********remanente********/
        setInterval("loadTotalRemanente()",100);
        setInterval("loadSiRemanente()",100); 
        setInterval("loadNoRemanente()",100); 
        $('#total_remanente').load('total_respuestas_remanente.php');
        $('#total_si_remanente').load('total_respuesta_si_remanente.php');
        $('#total_no_remanente').load('total_respuesta_no_remanente.php');
        $('#id_encuesta_dato_remanente').hide();
        $('#id_pregunta_dato_remanente').hide();
        

        /***********cuota social********/
        setInterval("loadTotalCuota()",100);
        setInterval("loadSiCuota()",100); 
        setInterval("loadNoCuota()",100); 
        $('#total_cuota').load('total_respuestas_cuota.php');
        $('#total_si_cuota').load('total_respuesta_si_cuota.php');
        $('#total_no_cuota').load('total_respuesta_no_cuota.php');
        $('#id_encuesta_dato_cuota').hide();
        $('#id_pregunta_dato_cuota').hide();

        /***********asignacion********/
        setInterval("loadTotalAsignacion()",100);
        setInterval("loadSiAsignacion()",100); 
        setInterval("loadNoAsignacion()",100); 
        $('#total_asignacion').load('total_respuestas_asignacion.php');
        $('#total_si_asignacion').load('total_respuesta_si_asignacion.php');
        $('#total_no_asignacion').load('total_respuesta_no_asignacion.php');
        $('#id_encuesta_dato_asignacion').hide();
        $('#id_pregunta_dato_asignacion').hide();
    });
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
        $.ajax({
            type:"POST",
            data:{respuesta:respuesta, id_pregunta:id_pregunta, id_encuesta:id_encuesta, id_usuario:id_usuario},
            url:"php/insertarEncuesta.php",
            success:function(r){
            if(r==1){
               $('#frmEncuestaMemoria')[0].reset();
               alertify.success("Respuesta Enviada");       
                }else{
                    alertify.error("Respuesta No Enviada");
                }           
            }
        });
        $('.group_memoria').trigger('change');
        $('#modalMemoria').remove();
      }  
    });

  });
        var loadTotalMemoria=function(){
        $.ajax({type: "POST",
            url: "total_respuestas_memoria.php"
        }).done(function( info ){
            $("#total_memoria").html( info );
        });
    }

        var loadSiMemoria=function(){
        $.ajax({type: "POST",
            url: "total_respuesta_si_memoria.php"
        }).done(function( info ){
            $("#total_si_memoria").html( info );
        });
    }

        var loadNoMemoria=function(){
        $.ajax({type: "POST",
            url: "total_respuesta_no_memoria.php"
        }).done(function( info ){
            $("#total_no_memoria").html( info );
        });
    }

    // total user
        var loadTotalUser=function(){
        $.ajax({type: "POST",
            url: "total_respuestas_user.php"
        }).done(function( info ){
            $("#total_user").html( info );
        });
    }
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
        $.ajax({
            type:"POST",
            data:{respuesta:respuesta, id_pregunta:id_pregunta, id_encuesta:id_encuesta, id_usuario:id_usuario},
            url:"php/insertarEncuesta.php",
            success:function(r){
            if(r==1){
               $('#frmEncuestaRemanente')[0].reset();
               alertify.success("Respuesta Enviada");       
                }else{
                    alertify.error("Respuesta No Enviada");
                }           
            }
        });
        $('.group_remanente').trigger('change');
        $('#modalRemanente').remove();
      }  
    });

  });
        var loadTotalRemanente=function(){
        $.ajax({type: "POST",
            url: "total_respuestas_remanente.php"
        }).done(function( info ){
            $("#total_remanente").html( info );
        });
    }

        var loadSiRemanente=function(){
        $.ajax({type: "POST",
            url: "total_respuesta_si_remanente.php"
        }).done(function( info ){
            $("#total_si_remanente").html( info );
        });
    }

        var loadNoRemanente=function(){
        $.ajax({type: "POST",
            url: "total_respuesta_no_remanente.php"
        }).done(function( info ){
            $("#total_no_remanente").html( info );
        });
    }

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
        $.ajax({
            type:"POST",
            data:{respuesta:respuesta, id_pregunta:id_pregunta, id_encuesta:id_encuesta, id_usuario:id_usuario},
            url:"php/insertarEncuesta.php",
            success:function(r){
            if(r==1){
               $('#frmEncuestaCuota')[0].reset();
               alertify.success("Respuesta Enviada");       
                }else{
                    alertify.error("Respuesta No Enviada");
                }           
            }
        });
        $('.group_cuota').trigger('change');
        $('#modalCuotaSocial').remove();
      }  
    });

  });
        var loadTotalCuota=function(){
        $.ajax({type: "POST",
            url: "total_respuestas_cuota.php"
        }).done(function( info ){
            $("#total_cuota").html( info );
        });
    }

        var loadSiCuota=function(){
        $.ajax({type: "POST",
            url: "total_respuesta_si_cuota.php"
        }).done(function( info ){
            $("#total_si_cuota").html( info );
        });
    }

        var loadNoCuota=function(){
        $.ajax({type: "POST",
            url: "total_respuesta_no_cuota.php"
        }).done(function( info ){
            $("#total_no_cuota").html( info );
        });
    }
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
            $('#no_asignacion').show();
            $('#si_asignacion').show();
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
        $.ajax({
            type:"POST",
            data:{respuesta:respuesta, id_pregunta:id_pregunta, id_encuesta:id_encuesta, id_usuario:id_usuario},
            url:"php/insertarEncuesta.php",
            success:function(r){
            if(r==1){
               $('#frmEncuestaAsignacion')[0].reset();
               alertify.success("Respuesta Enviada");       
                }else{
                    alertify.error("Respuesta No Enviada");
                }           
            }
        });
        $('.group_asignacion').trigger('change');
        $('#modalAsignacion').remove();
      }  
    });

  });
        var loadTotalAsignacion=function(){
        $.ajax({type: "POST",
            url: "total_respuestas_asignacion.php"
        }).done(function( info ){
            $("#total_asignacion").html( info );
        });
    }

        var loadSiAsignacion=function(){
        $.ajax({type: "POST",
            url: "total_respuesta_si_asignacion.php"
        }).done(function( info ){
            $("#total_si_asignacion").html( info );
        });
    }

        var loadNoAsignacion=function(){
        $.ajax({type: "POST",
            url: "total_respuesta_no_asignacion.php"
        }).done(function( info ){
            $("#total_no_asignacion").html( info );
        });
    }
</script>

<!--*******************************FIN JS MODAL ENCUESTA ASIGNACION**************************************-->