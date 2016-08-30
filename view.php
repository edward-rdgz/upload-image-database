<?php

$con = mysqli_connect("localhost", "root", "", "test") or die("Error en la cadena de conexion: ".mysqli_errno($con)); // cadena de conexion

$sql = "SELECT img FROM images WHERE id = ".$_REQUEST['id'];

$query = mysqli_query($con, $sql) or die("Error de datos seleccionados: ".mysqli_error($query));

$record = mysqli_fetch_array($query);
  
header("Content-type: image/jpeg");

mysqli_close($con);

echo $record['img'];

?>