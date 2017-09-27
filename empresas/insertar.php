<?php
//mostrar orrores
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST["nombre_emp"])) {
    //incluir conexion
    include('../inc/conexion.php');
    //obtenemos los valores del post
    $nombre = $_POST['nombre_emp'];
    //query de inserción
    $query = "INSERT INTO empresas(id_empresa,nombre_empresa) VALUES(null, '".$nombre."')";
    //echo $query;
    $res= mysqli_query($con,$query);  

    if($res!=null){
    		//echo ""
            echo '<script type="text/javascript">alert("Se aguardó \"'.$nombre.'\" correctamente");window.location="../empresas"</script>';
          }
}
else
  echo "empresa vacio";


?>