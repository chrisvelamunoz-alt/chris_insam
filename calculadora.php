<?php

// Verificar si se han enviado datos por el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores de los números y la operación del formulario
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    $resultado = ""; // Variable para almacenar el resultado

    // Validar que los valores sean numéricos
    if (!is_numeric($num1) || !is_numeric($num2)) {
        $resultado = "Error: Por favor, introduce solo números válidos.";
    } else {
        // Convertir los números a float para operaciones precisas
        $num1 = (float)$num1;
        $num2 = (float)$num2;

        // Realizar la operación según el botón presionado
        switch ($operacion) {
            case 'suma':
                $resultado = $num1 + $num2;
                break;
            case 'resta':
                $resultado = $num1 - $num2;
                break;
            case 'multiplicacion':
                $resultado = $num1 * $num2;
                break;
            case 'division':
                if ($num2 == 0) {
                    $resultado = "Error: No se puede dividir por cero.";
                } else {
                    $resultado = $num1 / $num2;
                }
                break;
            default:
                $resultado = "Error: Operación no válida.";
                break;
        }
    }

    // Mostrar el resultado en el navegador
    echo "<!DOCTYPE html>";
    echo "<html lang='es'>";
    echo "<head>";
    echo "    <meta charset='UTF-8'>";
    echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "    <title>Resultado de la Calculadora</title>";
    echo "</head>";
    echo "<body>";
    echo "    <h1>Resultado:</h1>";
    echo "    <p>" . htmlspecialchars($resultado) . "</p>"; // Usamos htmlspecialchars para seguridad
    echo "    <br>";
   // echo "    <a href='index.html'>Volver a la calculadora</a>";
    echo "</body>";
    echo "</html>";

} else {
    // Si se intenta acceder a calculadora.php directamente sin enviar el formulario
    echo "<!DOCTYPE html>";
    echo "<html lang='es'>";
    echo "<head>";
    echo "    <meta charset='UTF-8'>";
    echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "    <title>Acceso no permitido</title>";
    echo "</head>";
    echo "<body>";
    echo "    <h1>Acceso no permitido</h1>";
    echo "    <p>Por favor, usa el formulario en <a href='index.html'>index.html</a> para acceder a la calculadora.</p>";
    echo "</body>";
    echo "</html>";
}

?>