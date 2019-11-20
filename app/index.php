<?php
$conn = new mysqli("mysql", "root", "clave123", "mi_db");
// Verifica conexión
if ($conn->connect_error) {
	die("La conexión falló: " . $conn->connect_error);
}else echo "Conexión exitosa";

$sql = "SELECT nombre FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// Datos de salida de cada registro
	while($row = $result->fetch_assoc()) {
		echo $row['nombre']."<br>";
	}
} else {
	echo "Ningún resultado para la tabla usuarios";
}
$conn->close();
?>