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
    echo"Crea una matriz de 3x3 y llénala con números aleatorios del 10 al 20. Luego, encuentra la suma de todos los elementos de la matriz y muestra el resultado<br>";

    
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
$suma = 0;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $suma += $matriz[$i][$j];
    }
}

// Mostrar la suma de todos los elementos de la matriz en pantalla
echo "La suma de todos los elementos de la matriz es: " . $suma;
?>



</body>
</html>