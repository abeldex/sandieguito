<?php
//mostrar orrores
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST["nombre_op"])) {
    //incluir conexion
    include('../inc/conexion.php');
    //obtenemos los valores del post
    $nombre = $_POST['nombre_op'];
    //query de inserción
    $query = "INSERT INTO operadores(id_operador,nombre_operador) VALUES(null, '".$nombre."')";
    //echo $query;
    $res= mysqli_query($con,$query);  

    if($res!=null){
    		//echo ""
            echo '<script type="text/javascript">alert("Se aguardó \"'.$nombre.'\" correctamente");window.location="../operadores"</script>';
          }
}
else
  echo "operador vacio";


?>