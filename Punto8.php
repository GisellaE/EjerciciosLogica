<?php

$frases = [
    "El sol brilla en el cielo azul",
    "El cielo es azul y el mar también",
    "El sol y el mar iluminan el día",
    "El azul del mar es hermoso"
];

$textoCompleto = strtolower(implode(" ", $frases));
$palabras = str_word_count($textoCompleto, 1);
$frecuencia = array_count_values($palabras);

$palabraMasRepetida = array_search(max($frecuencia), $frecuencia);
$maxFrecuencia = max($frecuencia);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palabra Más Frecuente</title>
</head>
<body>
    <h2>Palabra con Mayor Frecuencia</h2>
    <p>La palabra más repetida es: <strong><?php echo $palabraMasRepetida; ?></strong>, con <?php echo $maxFrecuencia; ?> apariciones.</p>
</body>
</html>
