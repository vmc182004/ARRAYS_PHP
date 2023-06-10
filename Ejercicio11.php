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
    echo"Crea una matriz de 2x2 y llénala con números aleatorios del 1 al 10. Luego, multiplica cada elemento de la matriz por 3 y muestra el resultado<br>";
// Crear una matriz de 2x2
$matriz = array(
    array(rand(1, 10), rand(1, 10)),
    array(rand(1, 10), rand(1, 10))
);

// Mostrar la matriz original
echo "Matriz original: <br>";
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 2; $j++) {
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

// Multiplicar cada elemento de la matriz por 3
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 2; $j++) {
        $matriz[$i][$j] = $matriz[$i][$j] * 3;
    }
}

// Mostrar la matriz resultante
echo "Matriz resultante: <br>";
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 2; $j++) {
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}
?>


    
</body>
</html>