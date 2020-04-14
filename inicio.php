<?php
    require_once "php/conexion.php";
    require_once "dependencias.php";
	
    $error = '';

if(!empty($_POST['active'])){
        header('location:index.php');
    }else{
        if(!empty($_POST))
	    {
            if(empty($_POST["usuario"]) || empty($_POST['password'])){
                $error = 'Ingese usuario y contraseña';
            }else{
                $conexion=conexion();

                $usuario = $_POST['usuario'];
                $password = $_POST['password'];
                
                $sql = "SELECT id_usuario, usuario FROM usuario WHERE usuario = '$usuario' AND contrasena = '$password'";
                $result=mysqli_query($conexion,$sql);
                
                if(!empty($result) and mysqli_num_rows($result)) {
                    $data = mysqli_fetch_array($result);
                    session_start();
                    $_SESSION['active'] = true;
                    $_SESSION['idUser'] = $data['id_usuario'];
                    $_SESSION['username'] = $data['usuario'];
                    $_SESSION['correo'] = $data['email'];
                    $_SESSION['password'] = $data['contrasena'];
                    if($_SESSION['username'] == admin){
                        header('location:administrador.php');
                    }else{
                        header('location:index.php');
                    }
                    
                    
                }else{
                    $error = 'El usuario o contraseña son incorrectos';
                }
            }
	    }
}	
?>
<html>
	<head>
		<title>Login</title>
	</head>
	
<body>
<div class="container">
    <div class="row">
        <div class="col">
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header text-center">
                <img src="lr.jpg" class="img-fluid" alt="Responsive image">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Login</h5>
                    <form method="POST"> 
                        <div class="form-group row">
                            <label>Usuario</label>
                            <input id="usuario" name="usuario" type="text" class="form-control">
                        </div>
                        <div class="form-group row">
                        <label>Password</label>
                            <input class="form-control" id="password" name="password" type="password">
                        </div>            
                        <button class="btn btn-raised btn-primary btn-lg btn-block" name="login" type="submit">Ingresar</button>
                        <div style = "font-size:16px; color:#cc0000;"><?php echo isset($error) ? utf8_decode($error) : '' ; ?></div>   
                    </form>
                </div>
                <div class="card-footer text-muted text-center">
                    Lautaro Rosas 2020
                </div>
            </div>
        </div>
        <div class="col">
        </div>
    </div>
</div>		 
	</body>
</html>