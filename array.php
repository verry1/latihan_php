<?php

/*$a = array('hellow','world');
var_dump($a);

// array(2) { [0]=> string(6) "hellow" 
//			[1]=> string(5) "world" }


echo "<pre>".print_r($a,1)."</pre>";
/*Array
(
    [0] => hellow
    [1] => world
)*/


/*$b = [];
for ($i=0; $i < 1000 ; $i++) { 
	$b[$i] = "mobil ".($i+1);
}
for ($i=0; $i < sizeof($b); $i++) { 

	if ($i >= 199 and $i <=299) {
		echo $b[$i];
	}
}

//echo "<pre>".print_r($b,1)."</pre>";
//tampilkan mobil dengan nomor 200 sampai 300
//mobil >= 200
// & mobil <= 300

$c = [
	'd'=>['e'=>'s'],
		array('x'=>'u'),
	5=>[3,4],
	[
		'x',
		'd' => [1,'f']]
];


//echo "<pre>".print_r($c,1)."</pre>";
//echo "<br>".$c['d']['e'];
//echo "<br>".$c[0]['x'];
//echo "<br>".$c[1][1];
//echo "<br>".$c[6]['d'][1];


//menampilkan array session
echo "<pre>".print_r($_SESSION,1)."</pre>";
*/

//input ke array
// $x['nama'] = 'nama saya';
// $x['alamat'] = 'alamat';
// $s['identitas'] = $x;
// $u[] = $s;

// $x['nama'] = 'nama saya 2';
// $x['alamat'] = 'alamat 2';
// $s['identitas'] = $x;
// $u[] = $s; 

// $u[0]['identitas']['nama'] = 'nama';
// $u[0]['identitas']['alamat'] = 'alamat';
// $u[1]['identitas']['nama'] = 'nama 2';
// $u[1]['identitas']['alamat'] = 'alamat 2';

for ($i=1; $i < 100; $i++) {
	$u[$i]['identitas']['nama'] = 'nama'.$i;
	$u[$i]['identitas']['alamat'] = 'alamat'.$i; 
	
}
echo "<pre>". print_r($u,1). "</pre>"; 
//tugas : tampilkan hanya yang urutan nya merupakan bilangan prima


?>