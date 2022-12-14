<?php

include ("./conexion.php");

$arreglo = array();

//$sucursalID = "77de68daecd823babbb58edb1c8e14d7106e83bb";

$sql = mysqli_query($con, "CALL SP_BAL_AUTOS('".$_GET['fechaDesde']."','".$_GET['fechaHasta']."','".$_GET['sucursalID']."','".$_GET['tallerID']."')") or die(mysqli_error($con));

while ($re = mysqli_fetch_array($sql)) {
	$arreglo[] = $re;
}

mysqli_close($con);
echo json_encode ($arreglo);


