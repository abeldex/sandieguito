<?php
//incluir conexion
include('../inc/conexion.php');
$sql = "SELECT * FROM remisiones inner join empresas on remisiones.empresa = empresas.id_empresa
inner join materiales on materiales.id_material = remisiones.material";
$result_scale = mysqli_query($con, $sql)or die(mysqli_error());
$row_cnt = $result_scale->num_rows;

$empresas = '{
    "meta": {
        "page": 1,
        "pages": 1,
        "perpage": -1,
        "total": '.$row_cnt.',
        "sort": "asc",
        "field": "no_remision"
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
