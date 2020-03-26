<?php

?>
<?php require_once "dependencias.php"; ?>
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
		          <img src="lr.jpg" class="img-fluid">
            </div> 
          </div>   
          <div class="row justify-content-md-center">
            <div class="col-md-auto">
		          <h1>Memoria Anual 2020</h1>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button id="memoria" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Item Memoria
                      </button>
                    </h2>
                  </div>

                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
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
                          <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-success">
                              Total Respuestas Socios
                              <span class="badge badge-success badge-pill"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Total
                              <span class="badge badge-success badge-pill"><div id="total"></div></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Positivas
                              <span class="badge badge-success badge-pill"><div id="total_si"></div></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Negativas
                              <span class="badge badge-success badge-pill"><div id="total_no"></div></span>
                            </li>
                          </ul>
                        </div>
                        <div class="col">
                          <div class="row justify-content-center">
                            <span class="btn btn-raised btn-success btn-lg" data-toggle="modal" data-target="#modalMemoria">
                              <span class="fa fa-plus-circle"></span> Encuesta Memoria
                            </span>
                          </div>
                        </div>
                      </div>

                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                      <button id="remanente" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Item Distribucion de Remanente
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
                          <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-success">
                              Respuestas
                              <span class="badge badge-success badge-pill"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Total
                              <span class="badge badge-success badge-pill"><div id="total"></div></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Positivas
                              <span class="badge badge-success badge-pill"><div id="total_si"></div></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Negativas
                              <span class="badge badge-success badge-pill"><div id="total_no"></div></span>
                            </li>
                          </ul>
                        </div>
                        <div class="col">
                          <div class="row justify-content-center">
                            <span class="btn btn-raised btn-success btn-lg" data-toggle="modal" data-target="#addmodal">
                              <span class="fa fa-plus-circle"></span> Encuesta Remanente
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                      <button id="cuota_social" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Item Fijar Cuota Social
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

                      <!--<div class="row">
                        <div class="col">
                          <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-success">
                              Respuestas
                              <span class="badge badge-success badge-pill"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Total
                              <span class="badge badge-success badge-pill"><div id="total"></div></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Positivas
                              <span class="badge badge-success badge-pill"><div id="total_si"></div></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Negativas
                              <span class="badge badge-success badge-pill"><div id="total_no"></div></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Nulo
                              <span class="badge badge-success badge-pill"><div id="total_nulo"></div></span>
                            </li>
                          </ul>
                        </div>
                        <div class="col">
                          <div class="row justify-content-center">
                            <span class="btn btn-raised btn-success btn-lg" data-toggle="modal" data-target="#addmodal">
                              <span class="fa fa-plus-circle"></span> Encuesta Cuota Social
                            </span>
                          </div>
                        </div>
                      </div>-->
                    </div>
                  </div>
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
          <h5 class="modal-title" id="exampleModalLabel"><div id="encuestaMemoria"> </div></h5>
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
      <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><div id="encuestaRemanente"> </div></h5>
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
        setInterval("loadTotal()",100);
        setInterval("loadSi()",100); 
        setInterval("loadNo()",100); 
        $('#encuestaMemoria').load('pregunta.php');
        $('#total').load('total_respuestas.php');
        $('#total_si').load('total_respuesta_si.php');
        $('#total_no').load('total_respuesta_no.php');
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
    $('#encuestaMemoria').load('pregunta.php');
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
      var nombre_encuesta = $('#memoria').text();

      var nombre_encuesta = $.trim(nombre_encuesta);
        //declaro variable arreglo de respuesta (respuesta)
      var respuesta = [];
        //declaro variable y almaceno texto de encuesta (pregunta)
      var pregunta = $('#encuestaMemoria').text();
      //limpio el string sacando los espacios en blanco
      var pregunta = $.trim(pregunta);
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
            data:{respuesta:respuesta, pregunta:pregunta, nombre_encuesta:nombre_encuesta},
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
        var loadTotal=function(){
        $.ajax({type: "POST",
            url: "total_respuestas.php"
        }).done(function( info ){
            $("#total").html( info );
        });
    }

        var loadSi=function(){
        $.ajax({type: "POST",
            url: "total_respuesta_si.php"
        }).done(function( info ){
            $("#total_si").html( info );
        });
    }

        var loadNo=function(){
        $.ajax({type: "POST",
            url: "total_respuesta_no.php"
        }).done(function( info ){
            $("#total_no").html( info );
        });
    }

</script>
<!--*******************************FIN JS MODAL ENCUESTA MEMORIA**************************************-->

<!--*******************************JS MODAL ENCUESTA REMANENTE**************************************-->
<script type="text/javascript">
$(document).ready(function(){
    //carga en elemento encuesta el script en php
    $('#encuestaRemanente').load('pregunta.php');
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
      var nombre_encuesta = $('#remanente').text();

      var nombre_encuesta = $.trim(nombre_encuesta);
        //declaro variable arreglo de respuesta (respuesta)
      var respuesta = [];
        //declaro variable y almaceno texto de encuesta (pregunta)
      var pregunta = $('#encuestaRemanente').text();
      //limpio el string sacando los espacios en blanco
      var pregunta = $.trim(pregunta);
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
            data:{respuesta:respuesta, pregunta:pregunta, nombre_encuesta:nombre_encuesta},
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
        $('#addmodal').remove();
      }  
    });

  });
        var loadTotal=function(){
        $.ajax({type: "POST",
            url: "total_respuestas.php"
        }).done(function( info ){
            $("#total").html( info );
        });
    }

        var loadSi=function(){
        $.ajax({type: "POST",
            url: "total_respuesta_si.php"
        }).done(function( info ){
            $("#total_si").html( info );
        });
    }

        var loadNo=function(){
        $.ajax({type: "POST",
            url: "total_respuesta_no.php"
        }).done(function( info ){
            $("#total_no").html( info );
        });
    }

</script>
<!--*******************************FIN JS MODAL ENCUESTA REMANENTE**************************************-->
