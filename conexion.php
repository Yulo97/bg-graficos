<?php

try {
	$con = mysqli_connect("66.97.46.146", "bg_automotor_cli", "94f8607915dff25f013e45fc0642fb9830b0fb25ab0ab46d477eaf1061def379", "db_bg_automotor") or die("Error en la conexion");

	//$con = mysqli_connect("66.97.46.146","admin","admin40971232","db_asociados") or die("Error en la conexion");
	//$con2 = mysqli_connect("66.97.46.146","admin","admin40971232","db_gestionblack") or die("Error en la conexion");

	mysqli_set_charset($con, "utf8mb4");

	/* Comprueba la conexión */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}


	/* Cierra la conexión */
} catch (Exception $e) {
	var_dump($e);
}


?>