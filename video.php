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
            <div class="row">
                <div class="col">   
                    <h1>Video en vivo + chat</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <div class="card text-center">
                  <div class="card-header">
                  CHAT
                  </div>
                  <div class="card-body">
                    <div class="row">
                            <div class="col">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://www.youtube.com/embed/YZi5vam33ow" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>        
                    </div>

                  </div>
                </div>                         
                </div>
            </div> 

            <div id="chatstore"></div>



    <div class="row">
        <div class="col">
            <div class="card text-center">
                <div class="card-header">
                        CHAT
                    </div>
                        <div class="card-body">
                            <form id="frmAgregaMensaje">                         
                                    <div class="form-group row">                
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-sm group_cuota" name="nombre" id="nombre">
                                        </div>            
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <input type="textarea" class="form-control form-control-sm group_cuota" name="mensaje" id="mensaje" rows="4">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <button type="button" class="btn btn-raised btn-primary" id="btnResponderChat">Responder</button>
                                    </div>
                            </form>
                        </div>
                    </div>  
                </div>
            </div>                                   
        </div>
    </div>
    <div class="row">
        <div class="col">
        <a id="download">Download
<button id="stop">Stop
<script> 
  let shouldStop = false;
  let stopped = false;
  const downloadLink = document.getElementById('download');
  const stopButton = document.getElementById('stop');

  stopButton.addEventListener('click', function() {
    shouldStop = true;
  })

  var handleSuccess = function(stream) {  
    const options = {mimeType: 'video/webm;codecs=vp9'};
    const recordedChunks = [];
    const mediaRecorder = new MediaRecorder(stream, options);  

    mediaRecorder.addEventListener('dataavailable', function(e) {
      if (e.data.size > 0) {
        recordedChunks.push(e.data);
      }

      if(shouldStop === true && stopped === false) {
        mediaRecorder.stop();
        stopped = true;
      }
    });

    mediaRecorder.addEventListener('stop', function() {
      downloadLink.href = URL.createObjectURL(new Blob(recordedChunks));
      downloadLink.download = 'acetest.wav';
    });

    mediaRecorder.start();
  };

  navigator.mediaDevices.getUserMedia({ audio: true, video: false })
      .then(handleSuccess);

</script>                     
        </div>
    </div>

    
        </div>
        </div>
    </body>
<html>


<!--*******************************JS CHAT**************************************-->
<script type="text/javascript">
    $(document).ready(function(){
        $('#chatstore').load('chat.php');
    $('#btnResponderChat').click(function(){
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
<!--*******************************FIN JS CHAT**************************************-->