<?php

function busquedaBinariaMatriz($matriz, $objetivo) {
    $filas = count($matriz);
    $columnas = count($matriz[0]);
    $izquierda = 0;
    $derecha = $filas * $columnas - 1;
    
    while ($izquierda <= $derecha) {
        $medio = intdiv($izquierda + $derecha, 2);
        $fila = intdiv($medio, $columnas);
        $columna = $medio % $columnas;
        
        if ($matriz[$fila][$columna] == $objetivo) {
            return "Encontrado en la posición ($fila, $columna)";
        }
        
        if ($matriz[$fila][$columna] < $objetivo) {
            $izquierda = $medio + 1;
        } else {
            $derecha = $medio - 1;
        }
    }
    return "No encontrado";
}

$matriz = [
    [1, 3, 5, 7],
    [10, 11, 16, 20],
    [23, 30, 34, 60]
];

$resultado = "";
if (isset($_GET['numero'])) {
    $numero = intval($_GET['numero']);
    $resultado = busquedaBinariaMatriz($matriz, $numero);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda Binaria en Matriz</title>
</head>
<body>
    <h2>Búsqueda Binaria en una Matriz 2D</h2>
    <form method="GET">
        <label>Ingrese un número a buscar:</label>
        <input type="number" name="numero" required>
        <button type="submit">Buscar</button>
    </form>
    
    <?php if (!empty($resultado)) : ?>
        <p><strong>Resultado:</strong> <?php echo $resultado; ?></p>
    <?php endif; ?>
</body>
</html>
