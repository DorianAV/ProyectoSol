<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$json = json_decode(file_get_contents("php://input"));

$idu = $json->id;
$nombre = $json->nombre;

$sql = "UPDATE usuarios SET nombre='$nombre' WHERE id='$idu'";
$con = mysqli_connect('localhost', 'root', '2004', 'proyectosol');
$res = mysqli_query($con,$sql);
mysqli_close($con);

echo json_encode($res);
?>