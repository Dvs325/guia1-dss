<?php
$nombre = "DavidAntonio Cartagena Alas";
$lnacimiento = "Hospital primero de mayo, San salvador";
$edad = 21;
$carnet = "CA210565";

$datos_personales = <<<EOD
<table border="1">
    <tr>
        <th>Nombre Completo</th>
        <td>$nombre</td>
    </tr>
    <tr>
        <th>Lugar de Nacimiento</th>
        <td>$lnacimiento</td>
    </tr>
    <tr>
        <th>Edad</th>
        <td>$edad</td>
    </tr>
    <tr>
        <th>Carnet de la Universidad</th>
        <td>$carnet</td>
    </tr>
</table>
EOD;

echo $datos_personales;
?>