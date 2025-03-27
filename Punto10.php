<?php

function romanoADecimal($romano) {
    $valores = [
        'I' => 1, 'V' => 5, 'X' => 10, 'L' => 50,
        'C' => 100, 'D' => 500, 'M' => 1000
    ];
    $longitud = strlen($romano);
    $resultado = 0;

    for ($i = 0; $i < $longitud; $i++) {
        $actual = $valores[$romano[$i]];
        $siguiente = ($i + 1 < $longitud) ? $valores[$romano[$i + 1]] : 0;
        
        if ($actual < $siguiente) {
            $resultado -= $actual;
        } else {
            $resultado += $actual;
        }
    }
    return $resultado;
}

$decimal = "";
if (isset($_GET['romano'])) {
    $romano = strtoupper($_GET['romano']);
    $decimal = romanoADecimal($romano);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversión de Números Romanos</title>
</head>
<body>
    <h2>Conversión de Números Romanos a Decimales</h2>
    <form method="GET">
        <label>Ingrese un número romano:</label>
        <input type="text" name="romano" required>
        <button type="submit">Convertir</button>
    </form>
    
    <?php if (!empty($decimal)) : ?>
        <p>El número decimal equivalente es: <strong><?php echo $decimal; ?></strong></p>
    <?php endif; ?>
</body>
</html>
