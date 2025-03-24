<?php
// Definir dos arreglos de números
$numeros1 = [10, 20, 30, 40, 50];
$numeros2 = [30, 40, 50, 60, 70];

// Encontrar la intersección de los arreglos
$interseccion = array_values(array_intersect($numeros1, $numeros2));

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intersección de Arreglos</title>
</head>
<body>
    <h2>Elementos en común</h2>
    <p><?php echo !empty($interseccion) ? implode(", ", $interseccion) : "No hay elementos en común"; ?></p>
</body>
</html>