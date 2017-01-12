<?php
function get_web($url)
{
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);

	$hasil = curl_exec($ch);
	curl_close($ch);
	return $hasil;
}

$sumber = get_web('http://exploit-web.blogspot.co.id/2015/11/tutorial-membuat-scannerfinder-pada.html');
echo $sumber;
$split = explode($sumber);

echo $split;

?>