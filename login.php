<?php
session_start();

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener el nombre de usuario del formulario
    $usuario = $_POST['usuario'];

    // Establecer la variable de sesión 'usuario'
    $_SESSION['usuario'] = $usuario;

    // Establecer una cookie llamada 'usuario' con el nombre del usuario
    setcookie("usuario", $usuario, time() + 3600, "/");

    // Redirigir a la página principal
    header("Location: index.php");
    exit();
} else {
    // Si se intenta acceder directamente a login.php sin enviar el formulario, redirigir a la página principal
    header("Location: index.php");
    exit();
}
?>
