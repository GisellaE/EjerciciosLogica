<?php
function calcularMCD($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}
function calcularMCM($a, $b) {
    return ($a * $b) / calcularMCD($a, $b);
}

$resultado = "";
if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = intval($_GET['num1']);
    $num2 = intval($_GET['num2']);
    if ($num1 > 0 && $num2 > 0) {
        $mcd = calcularMCD($num1, $num2);
        $mcm = calcularMCM($num1, $num2);
        $resultado = "MCD: $mcd, MCM: $mcm";
    } else {
        $resultado = "Ingrese números válidos mayores que 0";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de MCD y MCM</title>
</head>
<body>
    <h2>Cálculo de Máximo Común Divisor (MCD) y Mínimo Común Múltiplo (MCM)</h2>
    <form method="GET">
        <label>Ingrese el primer número:</label>
        <input type="number" name="num1" min="1" required>
        <br>
        <label>Ingrese el segundo número:</label>
        <input type="number" name="num2" min="1" required>
        <br>
        <button type="submit">Calcular</button>
    </form>
    
    <?php if ($resultado !== "") : ?>
        <p><strong>Resultado:</strong> <?php echo $resultado; ?></p>
    <?php endif; ?>
</body>
</html>
