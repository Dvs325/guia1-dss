<?php
$servidor = $_SERVER['SERVER_NAME'];

$ruta = $_SERVER['REQUEST_URI'];

$direccionCompleta = $servidor . $ruta;

echo "$servidor<br> ";
echo "$ruta<br><br> ";

echo $direccionCompleta;
?>