<?php
//mostrar orrores
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST["nombre_mat"])) {
    //incluir conexion
    include('../inc/conexion.php');

    $nombre = $_POST['nombre_mat'];
    $query = "INSERT INTO materiales(id_material,nombre_material) VALUES(null,'".$nombre."')";

    $res= mysqli_query($con,$query);  

    if($res!=null){
            echo '<script>alert("Se aguardó \"'.$nombre.'\" correctamente");window.location="../materiales"</script>';
          }
}
else
  echo "material vacio";


?>