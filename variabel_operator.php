<?php 
/* 
Variabel berisi string
*/
$a = "Verry'RY";
//echo $a;

//variabel berisi angka
//atau desimal
$d = 1.2;
$e = 4;
//echo $d;
//echo $e;

//menggabungkan 2 variabel
$x = "Hello ";
$y = "World";
$z = $x.$y;
//echo $z; //Hello World

$m = "Test 1";
//echo $m."<br>"; //Test 1
$m .= "Test 2";
//echo $m."<br>"; //Test 1Test 2
$m .= "Test 3";
//echo $m; //Test 1Test 2Test 3


//operasi aritmatika
$q = 10;
$v = 3;
$ta = $q*$v; //kali
$ku = $q/$v; //bagi
$ba = $q+$v; //tambah
$ka = $q-$v; //kurang
$yu = $q%$v; //hasil bagi
// echo $ta."<br>";
// echo $ku."<br>";
// echo $ba."<br>";
// echo $ka."<br>";
// echo $yu."<br>";

//tipe data
$s = "Hello"; // <- teks
$m = 1; //integer/angka
$f = 1.2;//double/desimal
$h = true;//boolean
$arr = array (); //array

var_dump($s); //string(5) "Hello"
var_dump($m); //int(1)
var_dump($f); //float(1.2)
var_dump($h); //bool(true)
var_dump($arr); //array(0) { }



?>