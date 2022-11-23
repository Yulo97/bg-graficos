<?php

    $db = ['servidor' => '66.97.46.146','usuario' => 'bg_automotor_cli', 'password' => '94f8607915dff25f013e45fc0642fb9830b0fb25ab0ab46d477eaf1061def379','db' => 'db_bg_automotor'];

  function Conectar($db)
  {
      try {
          $conexion = new PDO("mysql:host={$db['servidor']};dbname={$db['db']};charset=utf8", $db['usuario'], $db['password']);          
          $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          return $conexion;
      } catch (PDOException $e) {
          exit($e->getMessage());
      }
  }


?>