<?php 
require_once "php/conexion.php"; 

$conexion=conexion();

//session_start();

    if(isset($_POST['Login']))
    {
       if(empty($_POST['UName']) || empty($_POST['Password']))
       {
            header("location:inicio.php?Empty= Please Fill in the Blanks");
       }
       else
       {


            $query="select * from usuario where user='".$_POST['UName']."' and contrasena='".$_POST['Password']."'";
            $result=mysqli_query($conexion,$query);

            if(mysqli_fetch_assoc($result))
            {
                //$_SESSION['User']=$_POST['UName'];
                header("location:wellcome.php");
            }
            else
            {
                header("location:inicio.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }

?>