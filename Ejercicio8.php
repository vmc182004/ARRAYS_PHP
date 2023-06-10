<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo"Crea una matriz de 3x3 y otra matriz de 3x3. Llénalas con números aleatorios del 10 al 20. Luego, resta las dos matrices y muestra el resultado<br>";
    
// Crear dos matrices de 3x3
$matriz1 = array(
    array(rand(10, 20), rand(10, 20), rand(10, 20)),
    array(rand(10, 20), rand(10, 20), rand(10, 20)),
    array(rand(10, 20), rand(10, 20), rand(10, 20))
);
$matriz2 = array(
    array(rand(10, 20), rand(10, 20), rand(10, 20)),
    array(rand(10, 20), rand(10, 20), rand(10, 20)),
    array(rand(10, 20), rand(10, 20), rand(10, 20))
);

// Restar las dos matrices
$matriz_resta = array();
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $resta_elementos = $matriz1[$i][$j] - $matriz2[$i][$j];
        $matriz_resta[$i][$j] = $resta_elementos;
    }
}

// Mostrar las dos matrices y su resta en pantalla
echo "<p>Matriz 1:</p>";
echo "<table>";
for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 3; $j++) {
        echo "<td>" . $matriz1[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<p>Matriz 2:</p>";
echo "<table>";
for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 3; $j++) {
        echo "<td>" . $matriz2[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<p>Matriz resta:</p>";
echo "<table>";
for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 3; $j++) {
        echo "<td>" . $matriz_resta[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

    
</body>
</html>