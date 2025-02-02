<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Dólares a Euros</title>
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <label for="dolares">Cantidad en dólares:</label>
        <input type="text" id="dolares" name="dolares">
        <input type="submit" value="Convertir">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dolares = $_POST['dolares'];
        if (is_numeric($dolares) && $dolares > 0) {
            $tasaCambio = 0.85; // Ejemplo de tasa de cambio
            $euros = $dolares * $tasaCambio;
            echo "<table>
                    <tr>
                        <th>Cantidad en Dólares</th>
                        <th>Equivalente en Euros</th>
                    </tr>
                    <tr>
                        <td>\$" . number_format($dolares, 2) . "</td>
                        <td>€" . number_format($euros, 2) . "</td>
                    </tr>
                  </table>";
        } else {
            echo "<p>Por favor, ingrese una cantidad válida en dólares.</p>";
        }
    }
    ?>
</body>
</html>