<?php 
require_once "dependencias.php";

session_start();
if(!isset($_SESSION['username']) || !$_SESSION['username'] == 'admin') {
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
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="row">
            <div class="col">hola</div>
            </div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>

            </div>
          </div>
          <div class="row">
            <div class="col">
            <h4 class="h4">Encuesta Memoria</h4>
            <canvas class="my-4 w-100" id="myChart1" width="900" height="380"></canvas>
            </div>
            <div class="col">
            <h4 class="h4">Encuesta Remanente</h4>
            <canvas class="my-4 w-100" id="myChart2" width="900" height="380"></canvas>
            </div>
            <div class="col">
            <h4 class="h4">Encuesta Cuota</h4>
            <canvas class="my-4 w-100" id="myChart3" width="900" height="380"></canvas>
            </div>
            <div class="col">
            <h4 class="h4">Encuesta Asignación</h4>
            <canvas class="my-4 w-100" id="myChart4" width="900" height="380"></canvas>
            </div>
          </div>
          
          <h2>Section title</h2>
          <div id="tabla_datos"></div>
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
  </body>
</html>

<?php 
    require_once "php/conexion.php";
    $conexion=conexion();
    $total_si = '';
    $total_no = '';
    $sql="CALL sp_total_respuestas_memoria;";
    $result=mysqli_query($conexion,$sql);

                    while ($ver=mysqli_fetch_row($result)){
                        $total_si = $ver[0];
                        $total_no = $ver[1];
                    }
                    $strTotalSi=(string)$total_si;
                    $strTotalNo=(string)$total_no;
    
?>
<script>
var ctx = document.getElementById('myChart1').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['SI', 'NO'],
        datasets: [{
            label: 'voto',
            data: [<?php echo $strTotalSi?>, <?php echo $strTotalNo?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
<?php 
    require_once "php/conexion.php";
    $conexion=conexion();
    $total_si_remanente = '';
    $total_no_remanente = '';
    $sql="CALL sp_total_respuestas_remanente;";
    $result=mysqli_query($conexion,$sql);

                    while ($ver=mysqli_fetch_row($result)){
                        $total_si_remanente = $ver[0];
                        $total_no_remanente = $ver[1];
                    }
                    $strTotalSiRemanente=(string)$total_si_remanente;
                    $strTotalNoRemanente=(string)$total_no_remanente;
    
?>
<script>
var ctx = document.getElementById('myChart2').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['SI', 'NO'],
        datasets: [{
            label: 'voto',
            data: [<?php echo $strTotalSiRemanente?>, <?php echo $strTotalNoRemanente?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

<?php 
    require_once "php/conexion.php";
    $conexion=conexion();
    $total_si_cuota = '';
    $total_no_cuota = '';
    $sql="CALL sp_total_respuestas_cuota;";
    $result=mysqli_query($conexion,$sql);

                    while ($ver=mysqli_fetch_row($result)){
                        $total_si_cuota = $ver[0];
                        $total_no_cuota = $ver[1];
                    }
                    $strTotalSiCuota=(string)$total_si_cuota;
                    $strTotalNoCuota=(string)$total_no_cuota;
    
?>
<script>
var ctx = document.getElementById('myChart3').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['SI', 'NO'],
        datasets: [{
            label: 'voto',
            data: [<?php echo $strTotalSiCuota?>, <?php echo $strTotalNoCuota?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

<?php 
    require_once "php/conexion.php";
    $conexion=conexion();
    $total_si_asignacion = '';
    $total_no_asignacion = '';
    $sql="CALL sp_total_respuestas_asignacion;";
    $result=mysqli_query($conexion,$sql);

                    while ($ver=mysqli_fetch_row($result)){
                        $total_si_asignacion = $ver[0];
                        $total_no_asignacion = $ver[1];
                    }
                    $strTotalSiAsignacion=(string)$total_si_asignacion;
                    $strTotalNoAsignacion=(string)$total_no_asignacion;
    
?>
<script>
var ctx = document.getElementById('myChart4').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['SI', 'NO'],
        datasets: [{
            label: '# of Votes',
            data: [<?php echo $strTotalSiAsignacion?>, <?php echo $strTotalNoAsignacion?>],
            backgroundColor: [
                'rgba(51, 164, 49, 0.5)',
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

<script>
    $(document).ready(function(){
$('#tabla_datos').load('tabla_datos.php');
    });
</script>