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
    $hora_llegada = $_POST['hora_llegada'];
    $hora_salida = $_POST['hora_salida'];
    $empresa = $_POST['empresa'];
    $obra = $_POST['obra'];
    $material = $_POST['material'];
    $unidad_m3 = $_POST['unidad_m3'];
    $chofer = $_POST['chofer'];
    $camion = $_POST['camion'];
    $recibido_obra = date('Y-m-d',strtotime($_POST['recibido_obra']));
    $placas_gondola = $_POST['placas_gondola'];

    //query de inserción
    $query = "INSERT INTO remisiones (no_remision, fecha_remision, hora_llegada_origen, hora_salida_origen, lugar_carga, obra, material, unidad_m3, id_operador, placas_camion, recibido_obra, placas_gondola)  VALUES ('".$no_remision."','".$fecha."','".$hora_llegada."','".$hora_salida."','".$empresa."','".$obra."','".$material."','".$unidad_m3."','".$chofer."','".$camion."','".$recibido_obra."','".$placas_gondola."')";
    
    echo $query;
    $res= mysqli_query($con,$query);  

    if($res!=null){
    		//echo ""
            echo '<script type="text/javascript">alert("Se aguardó \"'.$no_remision.'\" correctamente");window.location="../remisiones"</script>';
          }
}
else
  echo "remision vacio";


?>