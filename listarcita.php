<?php
header("Access-Control-Allow-Origin: *");
$sql="SELECT * from citas";
$lista=array();
$con=mysqli_connect('localhost', 'root', '', 'proyecto');
$res= mysqli_query($con, $sql);
while($rear=mysqli_fetch_array($res)){
    $lista[]=$rear;
}
mysqli_close($con);
echo json_encode($lista);
?>