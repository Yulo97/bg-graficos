<?php

include ("./conexion.php");

$arreglo = array();

$sql = mysqli_query($con, "CALL SP_BAL_CATEGORIAS('3')") or die(mysqli_error($con));

while ($re = mysqli_fetch_array($sql)) {
	$arreglo[] = $re;
}

mysqli_close($con);
echo json_encode ($arreglo);