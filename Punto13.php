<?php
// Implementación de la serie de Fibonacci con programación dinámica
function fibonacci($n) {
    if ($n <= 0) return 0;
    if ($n == 1) return 1;
    
    $fib = [0, 1];
    for ($i = 2; $i <= $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib[$n];
}

$resultado = "";
if (isset($_GET['numero'])) {
    $numero = intval($_GET['numero']);
    if ($numero >= 0) {
        $resultado = fibonacci($numero);
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
    <title>Serie de Fibonacci</title>
</head>
<body>
    <h2>Serie de Fibonacci con Programación Dinámica</h2>
    <form method="GET">
        <label>Ingrese el término de Fibonacci a calcular:</label>
        <input type="number" name="numero" min="0" required>
        <button type="submit">Calcular</button>
    </form>
    
    <?php if ($resultado !== "") : ?>
        <p><strong>Resultado:</strong> <?php echo $resultado; ?></p>
    <?php endif; ?>
</body>
</html>
