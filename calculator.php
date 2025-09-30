<?php
// Este archivo solo contiene la lógica PHP de la calculadora.
// Se incluye en index.php.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = '';

    switch ($operation) {
        case 'sum':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Error: División por cero no permitida.";
            }
            break;
        default:
            $result = "Operación no válida.";
            break;
    }

    echo '<div class="result">';
    echo 'Resultado: ' . htmlspecialchars($result);
    echo '</div>';
}
?>