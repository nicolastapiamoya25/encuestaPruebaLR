<?php
	require('php/conexion.php');
	
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
            
            $sql = "SELECT id_usuario FROM usuario WHERE user = '$usuario' AND contrasena = '$password'";
            $result=mysqli_query($conexion,$sql);
            
            if(!empty($result) and mysqli_num_rows($result)) {
                $data = mysqli_fetch_array($result);
                session_start();
                $_SESSION['active'] = true;
                $_SESSION['idUser'] = $data['id_usuario'];
                $_SESSION['username'] = $data['user'];

                header('location:index.php');
            }else{
                $error = 'El usuario o contraseña son incorrectos';
                session_destroy();
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
		<form action="" method="POST" > 
			<div><label>Usuario:</label><input id="usuario" name="usuario" type="text" ></div>
			<br />
			<div><label>Password:</label><input id="password" name="password" type="password"></div>
			<br />
			<div><input name="login" type="submit" value="login"></div> 
		</form> 
		
		<br />
		
		<div style = "font-size:16px; color:#cc0000;"><?php echo isset($error) ? utf8_decode($error) : '' ; ?></div>
	</body>
</html>