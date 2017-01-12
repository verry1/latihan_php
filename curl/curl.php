<?php

function resourceWeb($url){
     $data = curl_init();
  curl_setopt($data, CURLOPT_URL, $url);
  curl_setopt($data, CURLOPT_RETURNTRANSFER, true);
     $hasil = curl_exec($data);
     curl_close($data);
     return $hasil;
}
$sumber =  resourceWeb('http://www.seputarforex.com/data/konversi_matauang/');
$split = explode('<div id="content">', $sumber);
$splitLagi = explode('</table>', $split[1]);

echo $splitLagi[0];
?>