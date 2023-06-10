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
echo"Crea un vector de tamaño 5 y llénalo con números aleatorios del 1 al 10. Luego, multiplica los elementos del vector por 2 y muestra el resultado<br>";

// Crear un vector de tamaño 5
$vector = array();

// Llenar el vector con números aleatorios del 1 al 10
for ($i = 0; $i < 5; $i++) {
    $numero_aleatorio = rand(1, 10);
    $vector[] = $numero_aleatorio;
}

// Mostrar el vector original en pantalla
echo "Vector original: ";
print_r($vector);
echo"<br>";

// Multiplicar los elementos del vector por 2
for ($i = 0; $i < 5; $i++) {
    $vector[$i] = $vector[$i] * 2;
}

// Mostrar el vector resultante en pantalla
echo "Vector multiplicado por 2: ";
print_r($vector);
?>


</body>
</html>