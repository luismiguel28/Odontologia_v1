<?php
// Iniciar la sesión
session_start();

// Destruir la sesión
session_destroy();

// Redireccionar a la página principal
header("Location: ../../index.php");
exit(); // Asegurarse de que el script se detenga después de la redirección
?>
