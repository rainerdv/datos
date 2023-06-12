<?php
//CONEXION
$server = "localhost";
$user = "root";
$pass = "";
$db = "registro";
$conn = mysqli_connect($server, $user, $pass, $db);
if(!$conn){
    die("La conexión fallo: " . mysqli_connect_error());
}else{
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $exitencias = $_POST['existencias'];

    $sql = "INSERT INTO productos (nombre, descripcion, precio, existencias) VALUE ('". $nombre ."','". $descripcion ."','". $precio ."','". $exitencias ."')";

    if(mysqli_query($conn, $sql)){
        header("Location: listado.php");
    }else{
        echo "Error: " . mysqli_error($conn);
    }
    
}
?>