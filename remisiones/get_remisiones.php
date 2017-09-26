<?php
//incluir conexion
include('../inc/conexion.php');
$sql = "SELECT no_remision, fecha_remision, DATE_FORMAT(hora_llegada_origen, '%H:%i') as 'hora_llegada_origen', DATE_FORMAT(hora_salida_origen, '%H:%i') as 'hora_salida_origen', nombre_empresa, obra, nombre_material, unidad_m3, numero_camion, nombre_operador, camiones.placas_camion, recibido_obra, placas_gondola FROM remisiones inner JOIN empresas on remisiones.lugar_carga = empresas.id_empresa inner join materiales on remisiones.material = materiales.id_material inner join camiones on remisiones.placas_camion = camiones.placas_camion inner join operadores on remisiones.id_operador = operadores.id_operador";
$result_scale = mysqli_query($con, $sql)or die(mysqli_error());

$empresas = '{
    "meta": {
        "page": 1,
        "pages": 1,
        "perpage": -1,
        "total": 350,
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
