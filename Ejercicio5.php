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
echo"Crea dos vectores de tamaño 5 y llénalos con números aleatorios del 1 al 5. Luego, suma los dos vectores y muestra el resultado<br>";
// Crear dos vectores de tamaño 5
$vector1 = array();
$vector2 = array();

// Llenar los vectores con números aleatorios del 1 al 5
for ($i = 0; $i < 5; $i++) {
    $numero_aleatorio = rand(1, 5);
    $vector1[] = $numero_aleatorio;
    $numero_aleatorio = rand(1, 5);
    $vector2[] = $numero_aleatorio;
}

// Sumar los elementos de los dos vectores
$vector_suma = array();
for ($i = 0; $i < 5; $i++) {
    $suma_elementos = $vector1[$i] + $vector2[$i];
    $vector_suma[] = $suma_elementos;
}

// Mostrar los vectores y su suma en pantalla
echo "Vector 1: ";
print_r($vector1);
echo"<br>";
echo "Vector 2: ";
print_r($vector2);
echo"<br>";
echo "Vector suma: ";
print_r($vector_suma);
?>

</body>
</html>