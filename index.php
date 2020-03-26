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
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/KeAXSCFzMBk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>
                        </div>
                      </div>
                        <!-- CHAT                         
                        <div class="col">
                          <div id="chatstore"></div>
                          <form id="frmAgregaMensaje">           
                            <div class="form-group">
                              <label>Nombre</label>
                              <input class="form-control" type="text" name="nombre" placeholder="Ingrese su nombre">
                            </div>
                            <div class="form-group">
                              <label>Mensaje</label>
                              <textarea class="form-control" name="mensaje" pleaceholder="Ingresa tu mensaje" rows="3"></textarea>
                            </div>
                             <button type="button" class="btn btn-raised btn-primary" id="enviar" >Enviar</button>
                          </form>
                        </div>
                      </div>
                      FIN CHAT -->
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
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Nulo
                              <span class="badge badge-success badge-pill"><div id="total_nulo"></div></span>
                            </li>
                          </ul>
                        </div>
                        <div class="col">
                          <div class="row justify-content-center">
                            <span class="btn btn-raised btn-success btn-lg" data-toggle="modal" data-target="#addmodal">
                              <span class="fa fa-plus-circle"></span> Encuesta
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
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/KeAXSCFzMBk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>
                        </div>
                      </div>
                        <!-- CHAT                         
                        <div class="col">
                          <div id="chatstore"></div>
                          <form id="frmAgregaMensaje">           
                            <div class="form-group">
                              <label>Nombre</label>
                              <input class="form-control" type="text" name="nombre" placeholder="Ingrese su nombre">
                            </div>
                            <div class="form-group">
                              <label>Mensaje</label>
                              <textarea class="form-control" name="mensaje" pleaceholder="Ingresa tu mensaje" rows="3"></textarea>
                            </div>
                             <button type="button" class="btn btn-raised btn-primary" id="enviar" >Enviar</button>
                          </form>
                        </div>
                      </div>
                      FIN CHAT -->
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
                              <span class="fa fa-plus-circle"></span> Encuesta
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


    <!--************************************************* agregar datosmodal ***********************************************-->
  <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><div id="encuesta"> </div></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="frmEncuesta">

            <div class="form-group row">                
              <label class="col-sm-2 col-form-label">SI</label>
              <div class="col-sm-6">
                <input type="checkbox" class="form-control form-control-sm group1" value="si" name="si" id="si">
              </div>            
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">NO</label>
                <div class="col-sm-6">
                  <input type="checkbox" class="form-control form-control-sm group1" value="no" name="no" id="no">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">NULO</label>
              <div class="col-sm-6">        
                    <input type="checkbox" class="form-control form-control-sm group1" value="nulo" name="nulo" id="nulo">
              </div>
            </div>          
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-raised btn-primary" id="btnResponder">Responder</button>
        </div>
      </div>
    </div>
  </div>
  <!--************************************************* agregar datosmodal ***********************************************-->
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
        setInterval("loadOldMessages()",100);
        setInterval("loadTotal()",100);
        setInterval("loadSi()",100); 
        setInterval("loadNo()",100); 
        setInterval("loadNulo()",100); 
        $('#encuesta').load('pregunta.php');
        $('#total').load('total_respuestas.php');
        $('#total_si').load('total_respuesta_si.php');
        $('#total_no').load('total_respuesta_no.php');
        $('#total_nulo').load('total_respuesta_nulo.php');
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

<script type="text/javascript">
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
</script>

<script type="text/javascript">
$(document).ready(function(){
    //carga en elemento encuesta el script en php
    $('#encuesta').load('pregunta.php');
    //$('#encuesta2').load('pregunta.php');
      //escucha el elemto 'si'
      $('#si').on( 'change', function() {
        //si el elemento 'si' esta checkeado (truwe)
        if( $(this).is(':checked') ) {
        // Hacer que se escondan los checkbox
            $('#no').hide();
            $('#nulo').hide();
        } else {
            // Hacer aparecer los checkbox
            $('#no').show();
            $('#nulo').show();
            $('#si').show();
            //limpia los elementos group1
            $('.group1').trigger('change');
        }
        });

      $('#no').on( 'change', function() {
        if( $(this).is(':checked') ) {
        // Hacer que se escondan los checkbox
            $('#si').hide();
            $('#nulo').hide();
        } else {
            // Hacer aparecer los checkbox
            $('#si').show();
            $('#nulo').show();
            $('#no').show();
            //limpia los elementos group1
        $('.group1').trigger('change');
        }
        });

      $('#nulo').on( 'change', function() {
        if( $(this).is(':checked') ) {
        // Hacer que se escondan los checkbox
            $('#si').hide();
            $('#no').hide();
        } else {
            // Hacer aparecer los checkbox
            $('#si').show();
            $('#no').show();
            $('#nulo').show();
            //limpia los elementos group1
            $('.group1').trigger('change');
        }
        });

      //ejemplo encuesta modal
      
    $('#btnResponder').click(function(){
        //al precionar boton responder 
      var nombre_encuesta = $('#memoria').text();

      var nombre_encuesta = $.trim(nombre_encuesta);
        //declaro variable arreglo de respuesta (respuesta)
      var respuesta = [];
        //declaro variable y almaceno texto de encuesta (pregunta)
      var pregunta = $('#encuesta').text();
      //limpio el string sacando los espacios en blanco
      var pregunta = $.trim(pregunta);
      //busca en los elementos group1
      $('.group1').each(function(){
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
               $('#frmEncuesta')[0].reset();
               alertify.success("Respuesta Enviada");       
                }else{
                    alertify.error("Respuesta No Enviada");
                }           
            }
        });
        $('.group1').trigger('change');
        $('#addmodal').remove();
      }  
    });

  });
          //ejemplo encuesta2 collader
      
    //$('#btnResponder2').click(function(){
        //al precionar boton responder 
        //declaro variable arreglo de respuesta (respuesta)
      //var respuesta = [];
        //declaro variable y almaceno texto de encuesta (pregunta)
      //var pregunta = $('#encuesta2').text();
      //limpio el string sacando los espacios en blanco
      //var pregunta = $.trim(pregunta);
      //busca en los elementos group1
      //$('.group1').each(function(){
        //si hay uno checkeado
        //if ($(this).is(":checked")) {
            //guarda su valor en variable respuesta
           // respuesta.push($(this).val());
       // }
      //});
      /*respuesta = respuesta.toString();
      if (respuesta == "") {
        alertify.error("Debe responder la encuesta");
      }else{
        $.ajax({
            type:"POST",
            data:{respuesta:respuesta, pregunta:pregunta},
            url:"php/insertarEncuesta.php",
            success:function(r){
            if(r==1){
               $('#frmEncuesta')[0].reset();
               $('#total').load('total_respuestas.php');
               $('#total_si').load('total_respuesta_si.php');
               $('#total_no').load('total_respuesta_no.php');
               $('#total_nulo').load('total_respuesta_nulo.php');
               $.ajaxSetup({"cache":false});
              setInterval("loadTotal()",500);
              setInterval("loadSi()",500); 
              setInterval("loadNo()",500); 
              setInterval("loadNulo()",500);   
               alertify.success("Respuesta Enviada");       
                }else{
                    alertify.error("Respuesta No Enviada");
                }           
            }
        });
        $('.group1').trigger('change');
        $('#addmodal').remove();
      }  
    });
*/


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

        var loadNulo=function(){
        $.ajax({type: "POST",
            url: "total_respuesta_nulo.php"
        }).done(function( info ){
            $("#total_nulo").html( info );
        });
    }

</script>


<script type="text/javascript">
  /*$('#btnResponder').click(function(){
        //al precionar boton responder 
        //declaro variable arreglo de respuesta (respuesta)
      var respuesta = [];
        //declaro variable y almaceno texto de encuesta (pregunta)
      var nombre_encuesta = $('#memoria').text();

      var nombre_encuesta = $.trim(nombre_encuesta);

      var pregunta = $('#encuesta').text();
      //limpio el string sacando los espacios en blanco
      var pregunta = $.trim(pregunta);
      //busca en los elementos group1
      $('.group1').each(function(){
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
               $('#frmEncuesta')[0].reset();
               alertify.success("Respuesta Enviada");       
                }else{
                    alertify.error("Respuesta No Enviada");
                }           
            }
        });
        $('.group1').trigger('change');
        $('#addmodal').remove();
      }  
    });*/



</script>


