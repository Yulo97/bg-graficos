<?php

include ("./conexion.php");

$conexion =  Conectar($db);

$sql = mysqli_query($conexion, "CALL SP_BAL_AUTOS('".$_GET['sucursalID']."')") or die(mysqli_error($conexion));