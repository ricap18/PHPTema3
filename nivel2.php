<!DOCTYPE html>
<html lang="en">
<head>
   <title>PHPNivel2</title>
</head>
<body>

<?php
//Ejercicio 1
$n1 = 1;
$n2 = 2;
if ($n1==$n2) {
   echo ($n1+$n2)*2;
}
else {
   echo $n1+$n2;
}
echo "<br>";
echo "<br>";
?>


<?php
//Ejercicio 2
$cadena = "abcdefgh";
echo $cadena;
echo "<br>";
$primeraLetra = substr($cadena, 0, 1);  // Corta la cadena
$ultimaLetra = substr($cadena, -1);
$parteCentral = substr($cadena, 1,-1);
echo $ultimaLetra.$parteCentral.$primeraLetra;
 ?> 

</body>
</html>