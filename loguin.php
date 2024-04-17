<?php
header("Access-Control-Allow-Origin: *");

if(isset($_GET['correo']) && isset($_GET['contrasena'])) {
    $correo = $_GET['correo'];
    $contrasena = $_GET['contrasena'];
    
    $sql = "SELECT * FROM Usuarios WHERE Correo  ='$correo' AND Contrasena='$contrasena'";
    
    $con = mysqli_connect("localhost", "root", "", "proyecto");
    $alu = mysqli_query($con, $sql);

    $alumno = mysqli_fetch_assoc($alu);
    
    mysqli_close($con);
    
    if($alumno) {
        echo json_encode(['Tipo' => $alumno['Tipo']]);
    } else {
        echo json_encode(null);
    }
} else {
    echo json_encode(null);
}
?>