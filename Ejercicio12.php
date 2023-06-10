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
    echo"Crea una matriz de 3x3 y llénala con números aleatorios del 10 al 20. Luego, eleva cada elemento de la matriz al cubo y muestra el resultado.<br>";
    
    
// Crear una matriz de 3x3
$matriz = array();
for ($i = 0; $i < 3; $i++) {
    $fila = array();
    for ($j = 0; $j < 3; $j++) {
        $numero_aleatorio = rand(10, 20);
        $fila[] = $numero_aleatorio;
    }
    $matriz[] = $fila;
}

// Mostrar la matriz original
echo "Matriz original: <br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

// Elevar cada elemento de la matriz al cubo
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriz[$i][$j] = pow($matriz[$i][$j], 3);
    }
}

// Mostrar la matriz resultante
echo "Matriz resultante: <br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}
?>


</body>
</html>