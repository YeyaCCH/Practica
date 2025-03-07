<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="register-container">
        <div class="register-box">
            <h1>Crear Cuenta</h1>
            <form action="registrar.php" method="POST">
                <label for="username">Nombre de Usuario</label>
                <input type="text" id="username" name="username" required>

                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm_password">Confirmar Contraseña</label>
                <input type="password" id="confirm_password" name="confirm_password" required>

                <button type="submit">Registrarse</button>
                
                <a href="Index.php" class="button-link">Iniciar sesión</a>
            </form>
        </div>
    </div>
</body>
</html>
