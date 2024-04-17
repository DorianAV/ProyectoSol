<?php
       header("Access-Control-Allow-Origin:*");
        header("Access-Control-Allow-Headers:*");
        $json= json_decode(file_get_contents("php://input"));
        $n= $json->nombre;
        $ed= $json->edad;
       $pe= $json->peso;
       $prox=$json->proximaconsulta;
      $deta=$json->detallealimentacion; 
            if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    header('HTTP/1.1 200 OK');
    exit();
}
      $con=new mysqli("localhost","root","","proyecto");
       $sensql="insert into consultas (nombre,edad,peso,proxima_consulta,detalles_alimentacion) values('$n','$ed','$pe','$prox','$deta')";
       $re=$con->query($sensql);
       $con->close();
       //$pre=$con->prepare("insert into articulos (Articulo,Tipo_Articulo,Almacen,Precio) values(?,?,?,?)");
       //$re=$pre->execute([$json->articulo,$json->tipo_articulo,$json->almacen,$json->precio]);
echo json_encode($re);
        ?>