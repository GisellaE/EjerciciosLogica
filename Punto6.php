<?php
// Definir un arreglo de números con duplicados
$numeros = [10, 20, 20, 30, 40, 40, 50, 10, 60, 30];

// Eliminar duplicados usando array_unique
$numerosUnicos = array_values(array_unique($numeros));

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Duplicados</title>
</head>
<body>
    <h2>Arreglo sin duplicados</h2>
    <p><?php echo implode(", ", $numerosUnicos); ?></p>
</body>
</html>
