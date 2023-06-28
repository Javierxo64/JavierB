<?php
// Comprueba si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica las credenciales del usuario
    $username = $_POST["1"];
    $password = $_POST["1"];

    // Verifica las credenciales en tu base de datos o sistema de autenticación
    // Aquí debes incluir tu lógica de verificación de usuario

    // Si las credenciales son correctas, redirige al usuario a la página principal
    if ($username == "1" && $password == "1") {
        header("Location: inicio.html");
        exit();
    } else {
        $error_message = "Credenciales inválidas. Inténtalo de nuevo.";
    }
}
?>
