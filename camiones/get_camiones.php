<?php
//incluir conexion
include('../inc/conexion.php');
$sql = "SELECT placas_camion, numero_camion, modelo_camion, nombre_permisionario FROM camiones inner join permisionarios on camiones.id_permisionario = permisionarios.id_permisionario";
$result_scale = mysqli_query($con, $sql)or die(mysqli_error());
$row_cnt = $result_scale->num_rows;
$materiales = '{
    "meta": {
        "page": 1,
        "pages": 1,
        "perpage": 10,
        "total": '.$row_cnt.',
        "sort": "asc",
        "field": "placas_camion"
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

echo $materiales;
echo $datajson;
echo "}";																  
?>