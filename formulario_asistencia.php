<?php
     require_once "dependencias.php";

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
                        <h6>Complete el formulario de asistencia para poder asegurar su ingreso</h6>
                    </div>
                </div>
            </div>
    </br>
    </br>
    </br>
        <div class="row">
            <div class="col"></div>
            <div class="col-8">
                <form id="frmAsistencia">
                    <div class="form-group">
                        <label>Nombre Completo</label>
                        <input type="text" class="form-control" name="nombreIn" id="nombreIn">
                    </div>
                <div class="form-row">
                    <div class="form-group col-7">
                        <label>Rut</label>
                        <input type="text" class="form-control" name="rutIn" id="rutIn">
                    </div>
                    -
                    <div class="form-group col-4">
                        <label>DV</label>
                        <input type="text" class="form-control" name="dvIn" id="dvIn">
                    </div>
                </div>
                    <div class="form-group">
                        <label>Dirección</label>
                        <input type="text" class="form-control" name="direccionIn" id="direccionIn" placeholder="#1234 Main St">
                    </div>
                    <div class="form-group">
                        <label >Teléfono</label> +56
                        <input type="number" class="form-control" name="telefonoIn" id="telefonoIn" placeholder="91234 5679">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="emailIn" id="emailIn">
                    </div>
                    <button type="button" id="enviar" class="btn btn-raised btn-primary btn-lg btn-block">Registrar Asistencia</button>
                </form>
            </div>
        <div class="col"></div>
        </div>
        </div>
    </body>
</html>

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
<script type="text/javascript">
    $(document).ready(function(){

    $('#enviar').click(function(){
      if(validarFormVacio('frmAsistencia') > 0){
        alertify.alert('!Alerta¡',"Debes completar todos los campos por favor!");
        return false;
      }
        datos=$('#frmAsistencia').serialize();
      $.ajax({
        type:"POST",
        data:datos,
        url:"php/insertarAsistencia.php",
        success:function(r){
          if(r==1){
           $('#frmAsistencia')[0].reset();
           alertify.success("Formulario Enviado");         
         }else{
          alertify.error("No se pudo enviar el formulario");        
        }
      }
    });
    });
  });
</script> 
<!--*******************************FIN JS CHAT**************************************-->