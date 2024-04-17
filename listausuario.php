<?php
header("Access-Control-Allow-Origin: *");
$sql="SELECT * from usuarios";
$lista=array();
$con=mysqli_connect('localhost', 'root', '2004', 'proyectosol');
$res= mysqli_query($con, $sql);
while($rear=mysqli_fetch_array($res)){
    $lista[]=$rear;
}
mysqli_close($con);
echo json_encode($lista);
?>