<!DOCTYPE html>
<html lang="en">
<head>
   <title>PHPNivel1</title>
</head>
<body>

   <?php
   // Ejercicio 1
    $entero = 20;
    $decimal = 2.45;
    $animal = "Perro";
    $condicion = true;
    echo $entero. "</br>";
    echo $decimal. "</br>";
    echo $animal. "</br>";
    echo $condicion. "</br>";
    echo "<br>";
    echo "<br>";
    ?> 


    <?php
    // Ejercicio 2
    $frase = " Hello, World! ";
    echo $frase. "</br>";
    echo strtoupper($frase). "</br>";  //imprime en mayusculas
    echo strlen ($frase). "</br>";    //longitud de la variable, numero de caracteres
    echo strrev ($frase). "</br>";    //  Imprime los caracteres al reves
    $frase2 = " Este es el curso de PHP " ;
    echo $frase. $frase2. "</br>"; 
    echo "<br>";
    echo "<br>";
    ?> 


    <?php
    //Ejercicio 3
    define("nombre", "Ricardo");
    echo "<h1>";
    echo nombre;
    echo "</h1>"; 
    echo "<br>";
    echo "<br>";
    ?> 


    <?php
    //Ejercicio 4
    $x = 32;
    $y = 15;
    $n = 45.67;
    $m = 22.84;
    echo $x. "</br>";
    echo $y. "</br>";
    echo $x+$y. "</br>";
    echo $x-$y. "</br>";
    echo $x*$y. "</br>";
    echo $x%$y. "</br>";
    echo $n. "</br>";
    echo $m. "</br>";
    echo "<pre>"; 
    echo $n+$m. "</br>";
    echo $n-$m. "</br>";
    echo $n*$m. "</br>";
    echo $n%$m. "</br>";
    echo 2*$x. "</br>";
    echo 2*$y. "</br>";
    echo 2*$n. "</br>";
    echo 2*$m. "</br>";
    echo $x+$y+$n+$m. "</br>";
    echo $x*$y*$n*$m. "</br>";
    echo "</pre>";
    echo "<br>";
    echo "<br>";
    ?> 
    
    
    <?php
    //Ejercicio 5
    $arrayNumeros1 = array (3,7,5,8,2);  
    $arrayNumeros2 = array (4,1,6);
    $arrayNumeros2 [] = 9;   //Añade un int al array 2
    $arrayNumeros3 = array_merge($arrayNumeros1, $arrayNumeros2);    //  fusiona 2 o mas arrays
    echo count($arrayNumeros3). "</br>";  // Tamaño del array
    echo "<pre>";                          // Se imprime de forma ordenada
    var_dump($arrayNumeros3). "</br>";  //  Nos da información de la variable
    echo "</pre>";
    echo "<br>";
    echo "<br>";
   ?> 

</body>
</html>

