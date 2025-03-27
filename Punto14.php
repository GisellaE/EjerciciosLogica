<?php

function esPrimo($n) {
    if ($n < 2) return false;
    if ($n == 2 || $n == 3) return true;
    if ($n % 2 == 0 || $n % 3 == 0) return false;
    
    for ($i = 5; $i * $i <= $n; $i += 6) {
        if ($n % $i == 0 || $n % ($i + 2) == 0) return false;
    }
    return true;
}

$resultado = "";
if (isset($_GET['numero'])) {
    $numero = intval($_GET['numero']);
    if ($numero >= 0) {
        $resultado = esPrimo($numero) ? "El número $numero es primo." : "El número $numero no es primo.";
    } else {
        $resultado = "Ingrese un número válido";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Número Primo</title>
</head>
<body>
    <h2>Verificación de Número Primo</h2>
    <form method="GET">
        <label>Ingrese un número para verificar si es primo:</label>
        <input type="number" name="numero" min="0" required>
        <button type="submit">Verificar</button>
    </form>
    
    <?php if ($resultado !== "") : ?>
        <p><strong>Resultado:</strong> <?php echo $resultado; ?></p>
    <?php endif; ?>
</body>
</html>
