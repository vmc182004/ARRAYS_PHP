<?php
echo"Crea una matriz de 3x3 y llénala con números aleatorios del 10 al 30<br>";
// crear la matriz de números aleatorios
$matriz_numeros = array(
    array(rand(10, 30), rand(10, 30), rand(10, 30)),
    array(rand(10, 30), rand(10, 30), rand(10, 30)),
    array(rand(10, 30), rand(10, 30), rand(10, 30))
);

// mostrar la matriz en pantalla
echo "<p>Los números de la matriz son:</p>";
echo "<table>";
foreach ($matriz_numeros as $fila) {
    echo "<tr>";
    foreach ($fila as $numero) {
        echo "<td>$numero</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
