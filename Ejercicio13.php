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
    echo"Crea un vector de tamaño 5 y llénalo con números aleatorios del 1 al 10. Luego, encuentra el valor máximo y mínimo del vector y muestra los resultados<br>";
    
// Crear un vector de tamaño 5
$vector = array();

// Llenar el vector con números aleatorios del 1 al 10
for ($i = 0; $i < 5; $i++) {
    $numero_aleatorio = rand(1, 10);
    $vector[] = $numero_aleatorio;
}

// Encontrar el valor máximo y mínimo del vector
$maximo = max($vector);
$minimo = min($vector);

// Mostrar el vector original y el resultante
echo "Vector original: ";
print_r($vector);
echo"<br>";
echo "Valor máximo: $maximo ";
echo"<br>";
echo "Valor mínimo: $minimo ";
?>

    
    
</body>
</html>