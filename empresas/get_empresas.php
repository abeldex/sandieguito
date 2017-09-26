<?php
//incluir conexion
include('../inc/conexion.php');
$sql = "SELECT * FROM empresas";
$result_scale = mysqli_query($con, $sql)or die(mysqli_error());

$empresas = '{
    "meta": {
        "page": 1,
        "pages": 1,
        "perpage": -1,
        "total": 350,
        "sort": "asc",
        "field": "id_empresa"
    },
    "data": ';
	
//creamos un array
$rawdata = array();
//guardamos en un array multidimensional todos los datos de la consulta
$i=0;
while($row = mysqli_fetch_array($result_scale))
{
    $rawdata[$i] = $row;
    $i++;
}

$datajson = json_encode($rawdata);

echo $empresas;
echo $datajson;
echo "}";																  
?>

