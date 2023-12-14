<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Conectar a la base de datos y realizar la verificación en la base de datos
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $basedatos = "Tienda";
    $conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos);

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    $sql = "SELECT * FROM cliente WHERE email = '$username' AND contrasena = '$password'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        echo "true"; // Credenciales correctas
    } else {
        echo "false"; // Credenciales incorrectas
    }

    $conexion->close();
}
?>