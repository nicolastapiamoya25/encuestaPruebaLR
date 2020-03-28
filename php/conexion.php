<?php

	function conexion(){
		return mysqli_connect('localhost','root','','appchat2');
	}

	function formatearFecha($fecha){
		return date('g:i a', strtotime($fecha));
	}

 ?>