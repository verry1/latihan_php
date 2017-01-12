<?php

// function ulang($banyak,$kalimat)
// {
// 	for ($i=0; $i < $banyak; $i++) { 
// 		return $kalimat;
// 	}
// }

// function ulang2($banyak,$kalimat)
// {
// 	for ($i=0; $i < $banyak; $i++) { 
// 		return $kalimat;
// 	}else{
// 		return 0;
// 	}
// }

// echo ulang(100,"hello");
// echo ulang2(100,"hello");

function hs($operator,$a1,$a2)
{
	if ($operator == "+") {
		return $a1 + $a2;
	}elseif ($operator == "-") {
		return $a1 - $a2;
	}elseif ($operator == "x") {
		return $a1 * $a2;
	}elseif ($operator == "/") {
		return $a1 / $a2;
	}else{
		return "no operator";
	}
}
echo hs("+",5,6)."<br>";// 11
echo hs("-",5,6)."<br>";// -1
echo hs("x",4,3)."<br>";// 12 
echo hs("/",12,6)."<br>";// 2
echo hs("",12,6)."<br>";// no operator

$hari = [0,"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu"];


echo date ("Y-m-d")."<br>";// 2016-11-03
echo $hari[date("N")].date (", d F Y")."<br>";// Thursday, 03 November 2016

date_default_timezone_set("Asia/Jakarta");//jika settingan di php bukan GMT+7
echo date("H:i:s");//13:55:00



?>