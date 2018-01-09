<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Figuritas</title>
    <link rel="stylesheet" href="figuritas.css">
  </head>
  <body>
    <h1>Ejemplo 1</h1>

<?php

  $asteriscos="*";
  for ($i=1; $i <=5 ; $i++) {
    for ($conversor=$i; $conversor <= $i ; $conversor++) {
    }
    echo $asteriscos;
    echo "<br>";
  }

?>

<h2>Ejemplo 1.2</h2>


<?php
$i=1;

  while ($i <= 5) {
    echo "*";
    echo "<br>";
    $i++;
  }
?>


<h1>Ejemplo 2</h1>

<?php

$asteriscos="*****";
for ($i=1; $i <=5 ; $i++) {
  for ($conversor=$i; $conversor <= $i ; $conversor++) {
  }
  echo $asteriscos;
  echo "<br>";
}

 ?>

<h1>Ejemplo 3</h1>
<?php


$filasycolumnas=7;

   for ($i=1;$i<=$filasycolumnas;$i++){
     for ($asteriscos=1;$asteriscos<=$i;$asteriscos++){
       echo '*';
     }
    echo '<br>';
   }

 ?>

 <h1>Ejemplo 4</h1>


 <?php
$numero=5;
 for ($i=1; $i <=$numero ; $i++) {
   for ($conversor=1; $conversor <= $i ; $conversor++) {
   if (($i%2) == 1) {
     echo "*";
      }
   }
  echo "<br>";
 }

echo "<br>";

 $numero2=0;
  for ($a=3; $a >=$numero2 ; $a--) {
    for ($conversor=1; $conversor <= $a ; $conversor++) {
    if (($a%2) == 1) {
      echo "*";
       }
    }
   echo "<br>";
  }

  ?>

<h1>Ejemplo 5</h1>

<div class="figura5">


<?php

$numero=9;
 for ($i=1; $i <=$numero ; $i++) {
   for ($conversor=1; $conversor <= $i ; $conversor++) {
   if (($i%2) == 1) {
     echo "*";
      }
   }
  echo "<br>";
 }



 ?>
 </div>
  </body>
</html>
