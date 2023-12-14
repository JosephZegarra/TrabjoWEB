<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // Recuperar los datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $fecha_de_nacimiento = $_POST["fecha_de_nacimiento"];
    $celular = $_POST["celular"];

    // Conectar a la base de datos (reemplaza con tus propios valores)
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $basedatos = "Tienda";

    $conexion = new mysqli($servidor, $usuario, $contrasena) or die ("No se ha podido conectar al servidor de base de datos");

    //seleccionamos la base de datos
    $db = mysqli_select_db($conexion, $basedatos) or die
    ("Upps! Error al conectar con la BD");

    // Verificar la conexión a la base de datos
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Preparar la consulta SQL para insertar datos en la tabla de clientes
    $sql = "INSERT INTO cliente (nombre, apellido, fecha_de_nacimiento, celular) VALUES ('$nombre', '$apellido', '$fecha_de_nacimiento', '$celular')";

    if ($conexion->query($sql) === TRUE) {
        echo "Cliente agregado exitosamente";
    } else {
        echo "Error al agregar el cliente: " . $conexion->error;
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();
    
}
?>  