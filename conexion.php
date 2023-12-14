<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];
    $fecha_de_nacimiento = $_POST["fecha_de_nacimiento"];
    $celular = $_POST["celular"];

    // Conectar a la base de datos (reemplaza con tus propios valores)
    $servidor = "b6z2msq1b90i1zgp3tao-mysql.services.clever-cloud.com";
    $usuario = "ubjlf2jejekablaf";
    $contrasena = "cwZnpAgXrkycv7CLhKeh";
    $basedatos = "b6z2msq1b90i1zgp3tao"; // Reemplaza "TuBaseDeDatos" con el nombre de tu base de datos

    $conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos) or die("No se ha podido conectar al servidor de base de datos");

    // Verificar la conexión a la base de datos
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Preparar la consulta SQL para insertar datos en la tabla de clientes
    $sql = "INSERT INTO cliente (nombre, apellido, email, contrasena, fecha_de_nacimiento, celular) VALUES ('$nombre', '$apellido', '$email', '$contrasena', '$fecha_de_nacimiento', '$celular')";

    if ($conexion->query($sql) === TRUE) {
        echo "Cliente agregado exitosamente";
        

    } else {
        echo "Error al agregar el cliente: " . $conexion->error;
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();
}
?>