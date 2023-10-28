<?php

function exportarDB() {
  // Conectar a la base de datos
  $conexion = new PDO("mysql:host=localhost;dbname=ze", "root", "");

  // Obtener el nombre de la base de datos
  $nombreBaseDeDatos = $conexion->query("SELECT DATABASE()")->fetchColumn();

  // Crear un archivo para exportar la base de datos
  $archivo = fopen("nuevo.sql", "w");

  // Exportar la base de datos
  $sentencia = "SHOW TABLES;";
  $resultado = $conexion->query($sentencia);
  while ($fila = $resultado->fetch()) {
    $sentencia = "SELECT * FROM `" . $fila[0] . "`;";
    $resultado2 = $conexion->query($sentencia);
    fwrite($archivo, "DROP TABLE IF EXISTS `" . $fila[0] . "`;\n");
    fwrite($archivo, "CREATE TABLE `" . $fila[0] . "` (\n");
    $columnas = $resultado2->fetchAll(PDO::FETCH_COLUMN);
    foreach ($columnas as $columna) {
      fwrite($archivo, "  `" . $columna . "` " . $conexion->quote($columna) . ",\n");
    }
    fwrite($archivo, ");\n");
    foreach ($resultado2 as $fila2) {
      fwrite($archivo, "INSERT INTO `" . $fila[0] . "` VALUES (\n");
      foreach ($fila2 as $dato) {
        fwrite($archivo, "  " . $conexion->quote($dato) . ",\n");
      }
      fwrite($archivo, ");\n");
    }
  }

  // Cerrar el archivo
  fclose($archivo);

  // Notificar al usuario
  echo "La base de datos se ha exportado con éxito.";
}