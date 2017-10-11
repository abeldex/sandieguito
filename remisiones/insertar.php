<?php
//mostrar orrores
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST["no_remision"])) {
    //incluir conexion
    include('../inc/conexion.php');
    //obtenemos los valores del post
    $no_remision = $_POST['no_remision'];
    $fecha         = date('Y-m-d',strtotime($_POST['fecha']));
    //$fecha = $_POST['fecha'];
    $empresa = $_POST['empresa'];
    $obra = $_POST['obra'];
    $material = $_POST['material'];
    $unidad_m3 = $_POST['unidad_m3'];
    $chofer = $_POST['operador'];
    $camion = $_POST['placas'];
    $recibido_obra = date('Y-m-d',strtotime($_POST['recibido_obra']));
    $placas_gondola = $_POST['placas_gondola'];

    //query de inserción
    $query = "INSERT INTO remisiones (no_remision, fecha_remision,  empresa, obra, material, unidad_m3, operador, placas_camion, recibido_obra, placas_gondola)  VALUES ('".$no_remision."','".$fecha."','".$empresa."','".$obra."','".$material."','".$unidad_m3."','".$chofer."','".$camion."','".$recibido_obra."','".$placas_gondola."')";
    
    //echo $query;
    
    
    $res= mysqli_query($con,$query);  

    if($res!=null){

            $sql = "SELECT `precio_compra`, `precio_venta` FROM `materiales` WHERE `id_material`='".$material."'";
            $result = mysqli_query($con,$sql);
            if($row = mysqli_fetch_assoc($result))
                {
                      $precio = $row['precio_compra'];
                }
                            $total = $precio * $unidad_m3;
                            $sql2 = "INSERT INTO viajes VALUES(null,'".$fecha."','".$no_remision."','".$total."')";
                    echo $sql2;
            mysqli_query($con,$sql2);
            //echo ""
            echo '<script type="text/javascript">alert("Se aguardó \"'.$no_remision.'\" correctamente");window.location="../remisiones"</script>';
          }
}
else
  echo "remision vacio";


?>