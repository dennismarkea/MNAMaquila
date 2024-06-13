<?php
// Utilizar variables de entorno para la configuración de la base de datos
$servername = getenv('DB_HOST') ?: '127.0.0.1';
$username = getenv('DB_USERNAME') ?: 'ufgydnenruu6b';
$password = getenv('DB_PASSWORD') ?: '394ch#f2@123';
$dbname = getenv('DB_DATABASE') ?: 'dbpxnuejagkq3r';

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Listar las tablas de la base de datos
$result = $conn->query("SHOW TABLES");

echo "Tables in database '$dbname':<br>";
while ($row = $result->fetch_array()) {
    echo $row[0] . "<br>";
}

// Recibir los datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$organization = $_POST['organization'];
$message = $_POST['message'];

// Evitar inyección SQL utilizando declaraciones preparadas
$stmt = $conn->prepare("INSERT INTO form (name, email, telephone, organization, message) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $telephone, $organization, $message);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
