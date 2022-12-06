<?php

include ("./conexion.php");

$arreglo = array();

$sql = mysqli_query($con, "CALL SP_BAL_AUTOS('". $_GET['sucursalID'] ."','". $_GET['tallerID'] ."')") or die(mysqli_error($con));

while ($re = mysqli_fetch_array($sql)) {
	$arreglo[] = $re;
}

mysqli_close($con);
echo json_encode ($arreglo);