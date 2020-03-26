<?php 
$rut_cliente = $_POST['rut_cliente'];
$md5 = md5($rut_cliente);
 
echo $md5;

?>