<?php
//mostrar orrores
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST["nombre_mat"])) {
    //incluir conexion
    include('../inc/conexion.php');

    $nombre = $_POST['nombre_mat'];
    $compra = $_POST['compra'];
    $venta = $_POST['venta'];
    $query = "INSERT INTO materiales(id_material,nombre_material, precio_compra, precio_venta) VALUES(null,'".$nombre."','".$compra."','".$venta."')";

    $res= mysqli_query($con,$query);  

    if($res!=null){
    		//echo ""
            echo '<script type="text/javascript">alert("Se aguardó \"'.$nombre.'\" correctamente");window.location="../materiales"</script>';
          }
}
else
  echo "material vacio";


?>