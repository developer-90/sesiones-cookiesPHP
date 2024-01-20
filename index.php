<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['usuario'])) {
    echo "¡Hola, " . $_SESSION['usuario'] . "! <a href='logout.php'>Cerrar sesión</a>";
} else {
    // Si no ha iniciado sesión, mostrar el formulario de inicio de sesión
    echo "
        <!DOCTYPE html>
        <html lang='es'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Página de Inicio</title>
        </head>
        <body>
            <h2>Iniciar Sesión</h2>
            <form action='login.php' method='post'>
                <label for='usuario'>Usuario:</label>
                <input type='text' name='usuario' required>
                <input type='submit' value='Iniciar Sesión'>
            </form>
        </body>
        </html>
    ";
}
?>
