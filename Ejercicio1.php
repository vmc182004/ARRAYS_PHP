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
    echo"Crea un vector de tamaño 5 y llénalo con números aleatorios del 1 al 10<br>";
    // crear un vector vacío
$vector = array();

// llenar el vector con números aleatorios
for ($i = 0; $i < 5; $i++) {
    $vector[$i] = rand(1, 10);
}

// imprimir el vector
print_r($vector);

    ?>
</body>
</html>