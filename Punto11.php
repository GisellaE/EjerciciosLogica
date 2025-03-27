<?php
function quickSort($array) {
    if (count($array) < 2) {
        return $array;
    }
    
    $pivote = $array[0];
    $menores = array_values(array_filter(array_slice($array, 1), fn($x) => $x <= $pivote));
    $mayores = array_values(array_filter(array_slice($array, 1), fn($x) => $x > $pivote));
    
    return array_merge(quickSort($menores), [$pivote], quickSort($mayores));
}

$numeros = [34, 7, 23, 32, 5, 62, 32, 2, 78, 12];
$ordenado = quickSort($numeros);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenamiento QuickSort</title>
</head>
<body>
    <h2>Ordenamiento QuickSort</h2>
    <p><strong>Arreglo original:</strong> <?php echo implode(", ", $numeros); ?></p>
    <p><strong>Arreglo ordenado:</strong> <?php echo implode(", ", $ordenado); ?></p>
</body>
</html>
