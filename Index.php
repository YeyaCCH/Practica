<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h1>INICIO DE SESIÓN</h1>
            <form action="login.php" method="POST">
                <label for="email">Correo</label>
                <input type="email" id="email" name="email" required>
                
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>
                
                <button type="submit">Iniciar Sesión</button>

                <div class="containerspace"></div>
                
                <a href="registrarse.php" class="button-link">Registrarse</a>

                <div class="containerspace"></div>
                
                <a href="inicio.html" class="button-link">INVITADO</a>
            </form>
        </div>
    </div>
</body>
</html>
