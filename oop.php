<?php


//file oop.php
//deklarasi class/object

class mobil
{
	private $warna = null;
	private $merk = null;

	private $kilometer = 0;
	private $satuan = "km";

	private function getSatuanJarak()
	{
		return $this->satuan;
	}

	public function setSatuanJarak($sat)
	{
		$this->satuan = $sat;
	}

	public function setColor($warna_baru)
	{
		$this->warna = $warna_baru;
	}

	public function getColor()
	{
		return $this->warna;
	}

	public function maju($km)
	{
		$this->kilometer += $km;
	}

	public function mundur($km)
	{
		$this->kilometer-= $km;
	}

	public function getJarak()
	{
		return $this->kilometer." ".$this->getSatuanJarak()."<br>";
	}
}

$mobil1 = new mobil;
$mobil1->setSatuanJarak("m");

$mobil1->setColor("Kuning");
// echo $mobil1->getColor();

$mobil1->setColor("Biru");
// echo $mobil1->getColor();

echo $mobil1->getJarak();

//maju
$mobil1->maju(50);
echo $mobil1->getJarak();

$mobil1->maju(20);
echo $mobil1->getJarak(/*hasil = 70*/);

//mundur
$mobil1->mundur(40);
echo $mobil1->getJarak(/*hasil = 30*/);



?>