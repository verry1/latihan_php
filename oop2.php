<?php
/*
//CLASSS
class laptop
{
	//buat property untuk class
	var $pemilik;
	var $merk;
	var $ukuran_layar;

	// buat method untuk claass laptop
	function hidupkan_laptop()
	{
		return "hidupkan laptop";
	}
	function matikan_laptop()
	{
		return "matikan laptop";
	}
}

//buat objek dari class laptop(instansiasi)
$laptop_anto = new laptop();

//set property
$laptop_anto->pemilik = "Anto";
$laptop_anto->merk = "Asus";
$laptop_anto->ukuran_layar = "15 inchi";

//tampilkan property
echo $laptop_anto->pemilik;
echo "<br />";
echo $laptop_anto->merk;
echo "<br />";
echo $laptop_anto->ukuran_layar;
echo "<br />";

//tampilkan method
echo $laptop_anto->hidupkan_laptop();
echo "<br />";
echo $laptop_anto->matikan_laptop();
*/





/*//HAK AKSES : PUBLIC
class laptop
{
	//buat public property
	public $pemilik;

	//buat public method
	
	public function hidupkan_laptop()
	{
		return "hidupkan laptop";
	}
}

//buat objeck dari class laptop
$laptop_anto->pemilik = "Anto";

//tampilkan property
echo $laptop_anto->pemilik;

//tampilkan method
echo $laptop_anto->hidupkan_laptop();
*/






/*//HAK AKSES : PROTECTED
// buat class laptop
class laptop {

   // buat protected property
   protected $pemilik="Anto";

   public function akses_pemilik() {
      return $this->pemilik;
   }
   protected function hidupkan_laptop() {
      return "Hidupkan Laptop";
   }
   public function paksa_hidup() {
      return $this->hidupkan_laptop();
   }
}
 
// buat objek dari class laptop (instansiasi)
$laptop_anto = new laptop();
 
// jalankan method akses_pemilik()
echo $laptop_anto->akses_pemilik(); // "Anto"
 
// jalankan method paksa_hidup()
echo $laptop_anto->paksa_hidup(); // "Hidupkan Laptop"

// NOTE
// Hak akses protected tidak dibisa di akses dari luar class jadi
// kita harus membuat publuc funtion akses_pemilik() dan paksa_hidup() 
// untuk mengakses Hak ases Protected*/







/*// HAK ASES : PRIVATE
// buat class komputer
class komputer {
  
   // property dengan hak akses protected
   private $jenis_processor = "Intel Core i7-4790 3.6Ghz";
  
   public function tampilkan_processor() {
     return $this->jenis_processor;
   }
}
 
// buat class laptop
class laptop extends komputer{
 
   public function tampilkan_processor() {
     return $this->jenis_processor;
   }
}
 
// buat objek dari class laptop (instansiasi)
$komputer_baru = new komputer();
$laptop_baru = new laptop();
 
// jalankan method dari class komputer
echo $komputer_baru->tampilkan_processor(); // "Intel Core i7-4790 3.6Ghz"
 
// jalankan method dari class laptop (error)
echo $laptop_baru->tampilkan_processor();
// Notice: Undefined property: laptop::$jenis_processor

// NOTE
// Hak ases Private tidak bisa di jalankan dari luar class
*/










/*// Function $this
// buat class laptop
class laptop {
 
   // buat property untuk class laptop
   public $pemilik="Andi";
 
   // buat method untuk class laptop
   public function hidupkan_laptop() {
     return "Hidupkan Laptop $this->pemilik";
   }
}
 
// buat objek dari class laptop (instansiasi)
$laptop_baru = new laptop();
 
echo $laptop_baru->hidupkan_laptop(); // "Hidupkan Laptop Andi";
echo "<br />";
 
//ubah isi property $pemilik pada objek $laptop_baru
$laptop_baru->pemilik="Arie";
 
echo $laptop_baru->hidupkan_laptop(); // "Hidupkan Laptop Arie";
echo "<br />";

// buat objek baru dari class laptop dan panggil hidupkan_laptop()
$laptop_lama = new laptop();
$laptop_lama->pemilik = "Yanto";
echo $laptop_lama->hidupkan_laptop();*/












/*//Lebih dalam dengan function $this
// buat class laptop
class laptop {
 
   // buat property untuk class laptop
   public $pemilik;
   public $merk;
 
   // buat method untuk class laptop
   public function hidupkan_laptop() {
     return "Hidupkan Laptop $this->merk punya $this->pemilik";
   }
 
   public function matikan_laptop() {
     return "Matikan Laptop $this->merk punya $this->pemilik";
   }
 
   public function restart_laptop() {
     $matikan=$this->matikan_laptop();        
     $hidupkan= $this->hidupkan_laptop();
     $restart=$matikan."<br />".$hidupkan;
     return $restart;
   }
}
 
// buat objek dari class laptop (instansiasi)
$laptop_anto = new laptop();
 
// isi property objek
$laptop_anto->pemilik="Anto";
$laptop_anto->merk="Asus";
 
 
echo $laptop_anto->hidupkan_laptop();
// hasil: "Hidupkan Laptop Asus punya Anto";
 
echo "<br />";
 
echo $laptop_anto->matikan_laptop();
// hasil: "Matikan Laptop Asus punya Anto";
 
echo "<br />";
 
echo $laptop_anto->restart_laptop();
// hasil:
// "Matikan Laptop Asus punya Anto";
// "Hidupkan Laptop Asus punya Anto";
*/






?>