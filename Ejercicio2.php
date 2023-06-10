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
    echo"Crea un vector de tamaño 10 y llénalo con números aleatorios del 50 al 100<br>";
    $vector = array(); // Creamos un vector vacío

    // Rellenamos el vector con números aleatorios del 50 al 100
    for ($i = 0; $i < 10; $i++) {
        $numero_aleatorio = rand(50, 100); // Genera un número aleatorio entre 50 y 100
        $vector[] = $numero_aleatorio; // Agregamos el número generado al final del vector
    }
    
    // Mostramos el vector generado
    echo "El vector generado es: ";
    print_r($vector);
    

    ?>
</body>
</html>