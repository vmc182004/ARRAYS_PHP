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
    echo"Crea un vector de tamaño 6 y llénalo con números aleatorios del 1 al 5. Luego, eleva cada elemento del vector al cuadrado y muestra el resultado<br>";
    
// Crear vector de tamaño 6
$vector = array();

// Llenar el vector con números aleatorios del 1 al 5
for ($i = 0; $i < 6; $i++) {
    $numero_aleatorio = rand(1, 5);
    $vector[] = $numero_aleatorio;
}

// Mostrar el vector original
echo "Vector original: ";
print_r($vector);
echo"<br>";
// Elevar cada elemento del vector al cuadrado
for ($i = 0; $i < 6; $i++) {
    $vector[$i] = pow($vector[$i], 2);
}

// Mostrar el vector resultante
echo "Vector al cuadrado: ";
print_r($vector);
?>

    
</body>
</html>