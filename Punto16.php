<?php
// Función para determinar si existe un subconjunto cuya suma sea igual al valor objetivo
function existeSubconjunto($nums, $n, $objetivo) {
    if ($objetivo == 0) return true;
    if ($n == 0) return false;
    
    if ($nums[$n - 1] > $objetivo) {
        return existeSubconjunto($nums, $n - 1, $objetivo);
    }
    
    return existeSubconjunto($nums, $n - 1, $objetivo) || 
           existeSubconjunto($nums, $n - 1, $objetivo - $nums[$n - 1]);
}

$resultado = "";
if (isset($_GET['numeros']) && isset($_GET['objetivo'])) {
    $numeros = array_map('intval', explode(',', $_GET['numeros']));
    $objetivo = intval($_GET['objetivo']);
    
    if (!empty($numeros) && $objetivo >= 0) {
        $existe = existeSubconjunto($numeros, count($numeros), $objetivo);
        $resultado = $existe ? "Sí existe un subconjunto con la suma objetivo." : "No existe un subconjunto con la suma objetivo.";
    } else {
        $resultado = "Ingrese valores válidos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de Subconjuntos</title>
</head>
<body>
    <h2>Verificar Suma de Subconjuntos</h2>
    <form method="GET">
        <label>Ingrese números separados por coma:</label>
        <input type="text" name="numeros" required>
        <br>
        <label>Ingrese la suma objetivo:</label>
        <input type="number" name="objetivo" min="0" required>
        <br>
        <button type="submit">Verificar</button>
    </form>
    
    <?php if ($resultado !== "") : ?>
        <p><strong>Resultado:</strong> <?php echo $resultado; ?></p>
    <?php endif; ?>
</body>
</html>
