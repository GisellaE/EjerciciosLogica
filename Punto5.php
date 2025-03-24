<?php
// Verificar si se envió una palabra desde el formulario
$esPalindromo = false;
$mensaje = "";
if (isset($_GET['palabra'])) {
    $palabra = $_GET['palabra'];
    $palabraLimpia = strtolower(preg_replace('/[^a-zA-ZáéíóúÁÉÍÓÚ]/u', '', $palabra));
    $esPalindromo = ($palabraLimpia === strrev($palabraLimpia));
    $mensaje = $esPalindromo ? "es un palíndromo" : "no es un palíndromo";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Palíndromo</title>
</head>
<body>
    <form method="GET">
        <label>Ingrese una palabra:</label>
        <input type="text" name="palabra" required>
        <button type="submit">Verificar</button>
    </form>
    
    <?php if (isset($_GET['palabra'])) : ?>
        <p>La palabra "<?php echo htmlspecialchars($_GET['palabra']); ?>" <strong><?php echo $mensaje; ?></strong>.</p>
    <?php endif; ?>
</body>
</html>