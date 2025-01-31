<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $nacimiento = $_POST['nacimiento'];
    $carnet = $_POST['carnet'];

    //HERE DOCS:
    $tabla = <<<EOD
    <table border="1">
        <tr>
            <th>Campo</th>
            <th>Valor</th>
        </tr>
        <tr>
            <td>Nombre completo:</td>
            <td>$nombre</td>
        </tr>
        <tr>
            <td>Fecha de nacimiento:</td>
            <td>$nacimiento</td>
        </tr>
        <tr>
            <td>Edad:</td>
            <td>$edad</td>
        </tr>
        <tr>
            <td>Carnet:</td>
            <td>$carnet</td>
        </tr>
    </table>
    EOD;

    echo $tabla;
}else{
    echo "No se ha enviado nada";
}
    ?>