<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo Personalizado</title>
</head>
<body>
    <h2>Introduce tu nombre:</h2>
    
    <?php
    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el nombre del formulario
        $nombre = $_POST["nombre"];
        
        // Imprimir el saludo personalizado
        echo "<p>Hola, $nombre. ¡Bienvenido!</p>";
    }
    ?>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
