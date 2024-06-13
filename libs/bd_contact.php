<?php
$servername = "127.0.0.1";
$username = "ufgydnenruu6b";
$password = "394ch#f2@123";
$dbname = "dbpxnuejagkq3r";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Recibir los datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$organization = $_POST['organization'];
$message = $_POST['message'];

$sql = "INSERT INTO form (name, email, telephone, organization, message)
VALUES ('$name', '$email', '$telephone', '$organization', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
