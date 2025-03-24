<?php
// Definir un arreglo de números
$numeros = [10, 20, 30, 40, 50];

// Obtener el número desde un formulario
if (isset($_GET['numero'])) {
    $numeroBuscar = intval($_GET['numero']); // Convertir a número entero

    // Verificar si el número está en el arreglo
    if (in_array($numeroBuscar, $numeros)) {
        echo "El número $numeroBuscar está en el arreglo.";
    } else {
        echo "El número $numeroBuscar no está en el arreglo.";
    }
}
?>

<form method="GET">
    <label>Ingrese un número:</label>
    <input type="number" name="numero" required>
    <button type="submit">Buscar</button>
</form>
