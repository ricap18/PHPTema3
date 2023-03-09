<!DOCTYPE html>
<html lang="en">
<head>
   <title>PHPNivel3</title>
</head>
<body>

   <?php
   //Ejercicio 
   $cadena = "Hello world";
   $array = str_split($cadena);
   $array2 = array_splice($array, 0 , 5 );
   $array3 = array_splice($array, 1, 7 );
   var_dump(array_merge($array2,$array3));
   echo "<br>";
   echo "<br>";
   ?> 



   <?php
  //Ejercicio 2
  $array = array("Maria", "Carlos", "Juan", "Carlos", "Maria", "Raquel", "Maria");
  $comparar = "Maria";
  $encontrados = 1;

     foreach ($array as $valor) {  
        if ($comparar == $valor) {
           $vecesEncontrado =  $encontrados++;
        }
      }
   echo $comparar . " se encontró " . $vecesEncontrado . " veces en el array";
   echo "<br>";
   echo "<br>";
   ?> 
   


   <?php
   // Ejercicio 3
   $x = array(10, 20, 30, 40, 50);
   var_dump($x);
   echo "<br>";
   array_splice($x, 3 , -1 );
   var_dump($x);
   ?>




</body>
</html>