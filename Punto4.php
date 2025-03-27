<?php
$vocalesContadas = 0;
if (isset($_GET['frase'])) {
    $frase = $_GET['frase'];
    $vocalesContadas = preg_match_all('/[aeiouAEIOUáéíóúÁÉÍÓÚ]/', $frase);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar Vocales</title>
</head>
<body>
    <form method="GET">
        <label>Ingrese una frase:</label>
        <input type="text" name="frase" required>
        <button type="submit">Contar Vocales</button>
    </form>
    
    <?php if (isset($_GET['frase'])) : ?>
        <p>La frase ingresada tiene <strong><?php echo $vocalesContadas; ?></strong> vocales.</p>
    <?php endif; ?>
</body>
</html>
