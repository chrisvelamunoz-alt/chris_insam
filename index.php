<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Básica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="calculator-container">
        <h2>Calculadora Básica</h2>
        <form action="index.php" method="post">
            <input type="number" name="num1" placeholder="Primer número" step="any" required>
            <input type="number" name="num2" placeholder="Segundo número" step="any" required>
            <select name="operation" required>
                <option value="">Selecciona una operación</option>
                <option value="sum">Suma (+)</option>
                <option value="subtract">Resta (-)</option>
                <option value="multiply">Multiplicación (*)</option>
                <option value="divide">División (/)</option>
            </select>
            <button type="submit">Calcular</button>
        </form>

        <?php
        // Llama al archivo PHP que contiene la lógica de la calculadora
        require_once 'calculator.php';
        ?>
    </div>
</body>
</html>