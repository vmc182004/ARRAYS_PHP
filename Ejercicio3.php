<?php
echo"Crea una matriz de 2x2 y llénala con números aleatorios del 1 al 20<br>";
// crear la matriz de números aleatorios
$matriz_numeros = array(
    array(rand(1, 20), rand(1, 20)),
    array(rand(1, 20), rand(1, 20))
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
