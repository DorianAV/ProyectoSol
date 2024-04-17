<?php
       header("Access-Control-Allow-Origin:*");
        header("Access-Control-Allow-Headers:*");
        $json= json_decode(file_get_contents("php://input"));
       $n= $json->nombre;
       $fe=$json->fecha;
      $ho=$json->hora; 
            if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    header('HTTP/1.1 200 OK');
    exit();
}
      $con=new mysqli("localhost","root","2004","proyectosol");
       $sensql="insert into citas (Nombre,Fecha,Hora) values('$n','$fe','$ho')";
       $re=$con->query($sensql);
       $con->close();
       //$pre=$con->prepare("insert into articulos (Articulo,Tipo_Articulo,Almacen,Precio) values(?,?,?,?)");
       //$re=$pre->execute([$json->articulo,$json->tipo_articulo,$json->almacen,$json->precio]);
               
echo json_encode($re);
        ?>