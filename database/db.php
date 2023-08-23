<?php
  session_start();

  $conn = mysqli_connect(
    'localhost', 
    'root'
    '',
    'php php_mysql_crud_valerialeon_23ago23'
  ) or die (mysqli_error($mysqli)); // Haciendo conexion con los parametros de basededatos


?>