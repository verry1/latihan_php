<?php
//Contoh # 1 Menggunakan modul CURL PHP untuk mengambil homepage example.com
$ch = curl_init("http://www.codelebah.blogspot.com"); //mengambil data dari codelebah
$fp = fopen("http://www.codelebah.blogspot.com", "w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
fclose($fp);


?>