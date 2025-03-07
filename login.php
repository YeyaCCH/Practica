<?php

include("conexion.php");

$correo = $_POST['email'];
$password = $_POST['password'];

// Buscar al usuario con email y contraseña coincidentes
$sql = "SELECT * FROM usuarios WHERE email = '$correo' AND contraseña = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Usuario encontrado: iniciar sesión y redirigir
    $user = $result->fetch_assoc();
    $_SESSION['usuario'] = $user['nombre']; // Guardar el nombre del usuario en sesión
    header("Location: inicio.html"); // Redirigir al archivo de inicio
    exit();
} else {
    // Usuario no encontrado
    echo "Correo o contraseña incorrectos.";
}

// Cerrar la conexión
$conn->close();


?>