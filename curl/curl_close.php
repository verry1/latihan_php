<?php
//Contoh # 1 Memulai sesi Curl baru dan mengambil halaman web

//create a new curl resource
$ch = curl_init();

//set URL and Other appropriate options
curl_setopt($ch, CURLOPT_URL, "https://www.codelebah.blogspot.com/");
curl_setopt($ch, CURLOPT_HEADER, 0);

//grab URL and pass it to the browser
curl_exec($ch);

//close curl, and free up system
curl_close($ch);

?>