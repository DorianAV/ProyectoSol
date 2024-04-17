<?php 
header("Access-Control-Allow-Origin: *");
$idu = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE id='$idu'";
$usuario = array();

$con = mysqli_connect('localhost', 'root', '2004', 'proyectosol');
$res = mysqli_query($con,$sql);
while($rear = mysqli_fetch_array($res)){
    $usuario[] = $rear;
}
mysqli_close($con);
echo json_encode($usuario);
?>