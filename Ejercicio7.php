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
    echo"Crea una matriz de 2x2 y otra matriz de 2x2. Llénalas con números aleatorios del 1 al 10. Luego, suma las dos matrices y muestra el resultado<br>";
    // Crear dos matrices de 2x2
$matriz1 = array(
    array(rand(1,10), rand(1,10)),
    array(rand(1,10), rand(1,10))
);

$matriz2 = array(
    array(rand(1,10), rand(1,10)),
    array(rand(1,10), rand(1,10))
);

// Sumar las dos matrices
$matriz_suma = array();
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 2; $j++) {
        $suma_elementos = $matriz1[$i][$j] + $matriz2[$i][$j];
        $matriz_suma[$i][$j] = $suma_elementos;
    }
}

// Mostrar las dos matrices y su suma en pantalla
echo "Matriz 1: <br>";
foreach ($matriz1 as $fila) {
    foreach ($fila as $numero) {
        echo $numero . " ";
    }
    echo "<br>";
}

echo "Matriz 2: <br>";
foreach ($matriz2 as $fila) {
    foreach ($fila as $numero) {
        echo $numero . " ";
    }
    echo "<br>";
}

echo "Matriz suma: <br>";
foreach ($matriz_suma as $fila) {
    foreach ($fila as $numero) {
        echo $numero . " ";
    }
    echo "<br>";
}
    ?>
</body>
</html>