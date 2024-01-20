<?php
session_start();

// Cerrar la sesión
session_unset();
session_destroy();

// Eliminar la cookie 'usuario'
setcookie("usuario", "", time() - 3600, "/");

// Redirigir a la página principal
header("Location: index.php");
exit();
?>
