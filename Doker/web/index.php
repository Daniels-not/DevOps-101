<?php
$servername = getenv('MYSQL_HOST');
$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');
$dbname = getenv('MYSQL_DATABASE');

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "¡Conexión exitosa a la base de datos!<br>";

// Ejecutar una consulta simple
$sql = "SELECT 'Hola Mundo' as mensaje";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar datos de cada fila
    while($row = $result->fetch_assoc()) {
        echo $row["mensaje"];
    }
} else {
    echo "0 resultados";
}
$conn->close();
?>
