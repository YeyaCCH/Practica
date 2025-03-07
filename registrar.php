<?php

include("conexion.php");

$nombre = trim($_POST['username']);
$email = trim($_POST['email']);
$password = trim($_POST['password']); // Usar la contraseña tal cual sin encriptar

// Insertar los datos en la base de datos
$sql = "INSERT INTO usuarios (email, contraseña, nombre) VALUES ('$email', '$password', '$nombre')";

// Ejecutar la consulta y verificar si se completó correctamente
if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso.";
    header("Location: index.php"); // Redirigir después del registro
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>