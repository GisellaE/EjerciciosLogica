<?php
// Verificar si se envió una palabra desde el formulario
$palabraInvertida = "";
if (isset($_GET['palabra'])) {
    $palabra = $_GET['palabra'];
    $palabraInvertida = strrev($palabra);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invertir Cadena</title>
</head>
<body>
    <form method="GET">
        <label>Ingrese una palabra:</label>
        <input type="text" name="palabra" required>
        <button type="submit">Invertir</button>
    </form>
    
    <?php if (!empty($palabraInvertida)) : ?>
        <p>La palabra invertida es: <strong><?php echo htmlspecialchars($palabraInvertida); ?></strong></p>
    <?php endif; ?>
</body>
</html>
