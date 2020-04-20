<?php 
require_once "dependencias.php";

session_start();
if($_SESSION['username'] !== '18817532') {
    header("Location:inicio.php");
  }   
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <title>Administrador</title>
  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-success flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0"  href="#">Lautaro Rosas</a>

      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="cerrar_session.php">Cerrar Sesion</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active">
                  <span data-feather="home"></span>
                   <span class="sr-only"></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="administrador.php">
                  <span data-feather="bar-chart-2"></span>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="encuesta.php">
                  <span data-feather="file-text"></span>
                  Encuesta
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="encuesta.php">
                  <span data-feather="file-text"></span>
                  Asistencias
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="row">
            <div class="col">LR2020</div>
            </div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Solicitudes de asistencias</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>

            </div>
          </div>
          
          <h2>Asistencias recibidas</h2>
          <div id="tabla_asistencia"></div>
            </main>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->


    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    
      <!--************************************************* updatemodal ***********************************************-->
  <div class="modal fade" id="updatemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">

          <h5 class="modal-title" id="exampleModalLabel">Actualiza Estado</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        	<form id="frmactualiza">
            <input type="text" hidden="" name="id_asistencia" id="id_asistencia">
            <label>Nombre</label>
            <input type="text" class="form-control form-control-sm" name="nombreAU" id="nombreAU" disabled>
            <label>Rut</label>
            <input type="text" class="form-control form-control-sm" name="rutAU" id="rutAU">
            <label>Estado</label>
            <input type="text" class="form-control form-control-sm" name="estadoAU" id="estadoAU">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-raised btn-warning" id="btnactualizar" data-dismiss="modal">Actualizar</button>
        </div>
      </div>
    </div>
  </div>
  <!--************************************************* updatemodal ***********************************************-->

      <!--************************************************* envio correo modal ***********************************************-->
      <div class="modal fade" id="envioCorreoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">

          <h5 class="modal-title" id="exampleModalLabel">Enviar Clave Unica</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        	<form id="frmEnviarCorreo">
            <input type="text" hidden="" name="id_asistencia" id="id_asistencia">
            <label>Se enviará Clave Unica para el Socio: </label>
            <input type="text" class="form-control form-control-sm" name="nombreCO" id="nombreCO" disabled>
            <label>De Rut: </label>
            <input type="text" class="form-control form-control-sm" name="rutCO" id="rutCO" disabled>
            <label>Y la dirección de correo electrico es: </label>
            <input type="text" class="form-control form-control-sm" name="correoCO" id="correoCO" disabled>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-raised btn-warning" id="btnEnviarClave" data-dismiss="modal">Enviar Clave</button>
        </div>
      </div>
    </div>
  </div>
  <!--************************************************* envio correo modal ***********************************************-->

  </body>
</html>

<script>
    $(document).ready(function(){
$('#tabla_asistencia').load('tabla_asistencia.php');
    });
</script>


<script type="text/javascript">
  $(document).ready(function(){
    $('#btnactualizar').click(function(){

      datos=$('#frmactualiza').serialize();
        $.ajax({
          type:"POST",
          data:datos,
          url:"php/actualizarAsistente.php",
          success:function(r){
            if(r==1){
             $('#tabla_asistencia').load('tabla_asistencia.php');
               alertify.success("Actualizado con exito");
            }else{
               alertify.error("No se pudo actualizar");
            }
           }
        });
    });
  });
</script>

<script type="text/javascript">

  function obtenDatos(idasistencia){
    $.ajax({
      type:"POST",
      data:"idasistencia=" + idasistencia,
      url:"php/obtenerAsistente.php",
      success:function(r){
        datos=jQuery.parseJSON(r);

        $('#id_asistencia').val(datos['id_asistencia']);
        $('#nombreAU').val(datos['nombreAU']);
        $('#rutAU').val(datos['rutAU']);
        $('#estadoAU').val(datos['estadoAU']);
      }
    });
  }
</script>

<script type="text/javascript">

  function obtenDatosCorreo(idasistencia){
    $.ajax({
      type:"POST",
      data:"idasistencia=" + idasistencia,
      url:"php/obtenerAsistenteCorreo.php",
      success:function(r){
        datos=jQuery.parseJSON(r);

        $('#id_asistencia').val(datos['id_asistencia']);
        $('#nombreCO').val(datos['nombreCO']);
        $('#rutCO').val(datos['rutCO']);
        $('#correoCO').val(datos['correoCO']);
      }
    });
  }
</script>

<script type="text/javascript">
  $(document).ready(function() {

    var varAsitencia = $('#id_asistencia').val();
    var varAsitencia = $.trim(varAsitencia);
    var varAsitencia = parseInt(varAsitencia);

    $('#btnEnviarClave').click(function() {
      $.ajax({
        type:"POST",
        data:{varAsitencia: varAsitencia},
        url: "envio_correo.php",
        success:function(r){
            if(r==1){
               alertify.success("Correo Enviado con exito");
            }else{
               alertify.error("No se pudo Enviar");
            }
           }
      });
    });
  });
</script>