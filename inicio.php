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
                header('location:index.php');
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
            <div class="card">
                <div class="card-header text-center">
                    Lautaro Rosas 2020
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Login</h5>
                    <form method="POST"> 
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Usuario</label>
                            <input id="usuario" name="usuario" type="text" class="form-control">
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Password</label>
                            <input class="form-control" id="password" name="password" type="password">
                        </div>            
                        <button class="btn btn-primary" name="login" type="submit" >Ingresar</button>
                        <div style = "font-size:16px; color:#cc0000;"><?php echo isset($error) ? utf8_decode($error) : '' ; ?></div>   
                    </form>
                </div>
                <div class="card-footer text-muted text-center">
                    Lautaro Rosas 2020
                </div>
            </div>
        </div>
    
    </div>
</div>		 
	</body>
</html>