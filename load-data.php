<?php

$imageContent = $_FILES['img']['tmp_name']; // obtiene el contenido
$imageName = $_FILES['img']['name']; // obtiene nombre
$imageType = $_FILES['img']['type']; // obtiene el tipo
$imageSize = $_FILES['img']['size']; // obtiene el tamaño

$file = fopen($imageContent, 'rb'); // abre el archivo binario "imagen" en modo lectura
$content = fread($file, $imageSize); // lee el archivo hasta el tamaño de la imagen
$content = addslashes($content); // añade caracteres de escape
fclose($file); // cierra el archivo

$con = mysqli_connect("localhost", "root", "", "test") or die("Error en la cadena de conexion: ".mysqli_errno($con)); // cadena de conexion

$sql = "INSERT INTO images (img) VALUES ('".$content."')"; // sentencia de inserccion

mysqli_query($con, $sql) or die("Error al subirla."); // ejecucion

mysqli_close($con); // cierre de la conexion

echo "<p>Datos Cargados</p>";

echo "<a href=\"index.php\">Retornar</a>";

?>