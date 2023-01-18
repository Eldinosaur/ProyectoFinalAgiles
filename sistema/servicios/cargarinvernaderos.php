<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

include_once 'conexion.php';
$time = time();

$sqlSelect = "SELECT numero, cultivo,(SELECT temperatura FROM registros WHERE tiempo like '$time' and invernadero = numero) temperatura, (SELECT humedad FROM registros WHERE tiempo like '$time' and invernadero = numero) humedad FROM `invernaderos` ";
$respuesta = $conection -> query ($sqlSelect);
$result = array ();


if ( $respuesta -> num_rows > 0 ){
    while ( $fila = $respuesta-> fetch_assoc()){
        array_push($result, $fila);
    }
}else {
    $result = null;
}

$resultJSON = json_encode($result);
//echo $resultJSON;

?>