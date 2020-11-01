<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Crear base de datos</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>

<body>

<div class="alert alert-primary" role="alert">

<div class="container">
		<div class="row">
<?php
$servername = "localhost";
$username = "root";
$password = "root";
//Crear Conexion con MYSQL
$conn = new mysqli($servername, $username, $password);
//Comprobar la Conexión
if ($conn->connect_error) {
    die("Fallo de Conexión: " . $conn->connect_error);
} 
//Crear base de datos
$sql = "CREATE DATABASE ejemplo4";
if ($conn->query($sql) === TRUE) {
    echo "Base de Datos Creada.";
} else {
    echo "Error al Crear la Base de Datos:". $conn->error;
}
//Cerrar Conexión
$conn->close();

?>

</div>
</body>
</html>