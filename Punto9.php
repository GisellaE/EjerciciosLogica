<?php
// Definir una lista de frases
$frases = [
    "El sol brilla en el cielo azul",
    "El cielo es azul y el mar también",
    "El sol y el mar iluminan el día",
    "El azul del mar es hermoso"
];

// Verificar si se enviaron las palabras desde el formulario
$fraseModificada = "";
if (isset($_GET['palabra_original']) && isset($_GET['palabra_nueva'])) {
    $palabraOriginal = $_GET['palabra_original'];
    $palabraNueva = $_GET['palabra_nueva'];
    
    // Reemplazar la palabra en todas las frases
    $fraseModificada = array_map(function($frase) use ($palabraOriginal, $palabraNueva) {
        return str_ireplace($palabraOriginal, $palabraNueva, $frase);
    }, $frases);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reemplazo de Palabras</title>
</head>
<body>
    <h2>Reemplazo de Palabras en una Frase</h2>
    <form method="GET">
        <label>Palabra a reemplazar:</label>
        <input type="text" name="palabra_original" required>
        <label>Nueva palabra:</label>
        <input type="text" name="palabra_nueva" required>
        <button type="submit">Reemplazar</button>
    </form>
    
    <?php if (!empty($fraseModificada)) : ?>
        <h3>Frases Modificadas:</h3>
        <ul>
            <?php foreach ($fraseModificada as $frase) : ?>
                <li><?php echo htmlspecialchars($frase); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>
