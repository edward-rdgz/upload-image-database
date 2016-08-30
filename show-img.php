<html>
<head>
	<title>Lista</title>
</head>
<body>
<?php

$con = mysqli_connect("localhost", "root", "", "test") or die("Error en la cadena de conexion: ".mysqli_errno($con)); // cadena de conexion

$sql = "SELECT id FROM images";

$query = mysqli_query($con, $sql) or die("".mysqli_error($query));

echo "<table border=\"1\"><tr><td>id</td><td>img</td></tr>";

while ( $row = mysqli_fetch_array($query) )
{
  
	echo "<tr><td>".$row['id']."</td><td><img src=\"view.php?id=".$row['id']."\"></td></tr>";

}

echo "</table>" ;

mysqli_close($con);

echo "<a href=\"index.php\">Retornar</a>";

?>
</body>
</html>