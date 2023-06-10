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
    echo"Crea una matriz de 2x2 y llénala con números aleatorios del 1 al 10. Luego, encuentra el valor máximo y mínimo de la matriz y muestra los resultados<br>";
    
// Crear una matriz de 2x2
$matriz = array(
    array(rand(1,10), rand(1,10)),
    array(rand(1,10), rand(1,10))
);

// Mostrar la matriz original
echo "Matriz original: <br>";
foreach($matriz as $fila){
    foreach($fila as $elemento){
        echo $elemento . " ";
    }
    echo "<br>";
}

// Encontrar el valor máximo y mínimo
$valor_maximo = $matriz[0][0];
$valor_minimo = $matriz[0][0];

foreach($matriz as $fila){
    foreach($fila as $elemento){
        if($elemento > $valor_maximo){
            $valor_maximo = $elemento;
        }
        if($elemento < $valor_minimo){
            $valor_minimo = $elemento;
        }
    }
}

// Mostrar los resultados
echo "Valor máximo: " . $valor_maximo . "<br>";
echo "Valor mínimo: " . $valor_minimo . "<br>";
?>

</body>
</html>