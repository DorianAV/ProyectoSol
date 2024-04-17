<?php 
header("Access-Control-Allow-Origin: *");
$idu = $_GET['id'];
$sql = "DELETE FROM citas WHERE id = '$idu'";
$con = mysqli_connect('localhost', 'root', '', 'proyecto');
$res = mysqli_query($con,$sql);
mysqli_close($con);

echo json_encode($res);
?>