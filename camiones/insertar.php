<?php
//mostrar orrores
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST["placas"])) {
    //incluir conexion
    include('../inc/conexion.php');
    //obtenemos los valores del post
    $placas = $_POST['placas'];
    $numero = $_POST['numero_camion'];
    $modelo = $_POST['modelo'];
    $perm = $_POST['permisionario'];
    //query de inserción
    $query = "INSERT INTO camiones(placas_camion,numero_camion, modelo_camion, id_permisionario) VALUES('".$placas."', '".$numero."','".$modelo."', ".$perm.")";
    //echo $query;
    $res= mysqli_query($con,$query);  

    if($res!=null){
    		//echo ""
            echo '<script type="text/javascript">alert("Se aguardó \"'.$placas.'\" correctamente");window.location="../camiones"</script>';
          }
}
else
  echo "camion vacio";


?>