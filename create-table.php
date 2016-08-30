<?php

$con = mysqli_connect("localhost", "root", "", "test") or die("Error en la cadena de conexion: ".mysqli_errno($con)); // cadena de conexion

$sql = "DROP TABLE IF EXISTS images"; // sentencia de existencia

$findTb = mysqli_query($con, $sql) or die("Error en la sentencia sql: ".mysqli_error($findTb)); // consulta

$sql = "CREATE TABLE images ( id INTEGER AUTO_INCREMENT, img BLOB, PRIMARY KEY (id) )"; // sentencia de creacion

$createTb = mysqli_query($con, $sql) or die("Error en la sentencia sql: ".mysqli_error($createTb)); // consulta

mysqli_close($con);

echo "<a href=\"index.php\">Retornar</a>";
  
?>