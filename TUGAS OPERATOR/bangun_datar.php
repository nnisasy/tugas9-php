<?php
$p = 5;
$l = 10;
$a = 2;
$b = 4;
$t = 6;
$s = 8;

//Luas Persegi 
echo "======= Luas Persegi =========== <br>";
$x = $s ** 2;
echo "sisi x sisi = $s x $s = $x ";

//Luas Persegi Panjang
echo "<br><br>======= Luas Persegi Panjang =========== <br>";
$x = $p * $l;
echo "panjang x lebar = $p x $l = $x ";

//Luas Jajaran Genjang
echo "<br><br>======= Luas Jajaran Genjang =========== <br>";
$x = $a * $t;
echo "alat x tinggi = $a x $t = $x ";

//Luas Segitiga
echo "<br><br>======= Luas Segitiga =========== <br>";
$x = 1 / 2 * $a * $t;
echo "1/2 x alas x tinggi = 1/2 x $a x $t = $x ";

//Luas Trapesium
echo "<br><br>======= Luas Trapesium =========== <br>";
$x = 1 / 2 * ($a + $b) * $t;
echo "1/2 x (a+b) x tinggi = 1/2 x ($a + $b) x $t = $x ";
