<?php 

	function conexion(){
		return mysqli_connect('localhost','root','','mydb');
	}

	function formatearFecha($fecha){
	return date('g:i a', strtotime($fecha));


}
 ?>