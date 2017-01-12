<html>
<form method="post">
		<center>URL : <br>
		<center>
		<textarea name="target" style="width: 500px; height: 250px; resize:none; padding-left:5px; margin: 5px auto;" placeholder="http://www.target.co.li/"></textarea><br>
		<input type="submit" name="go" value="Start Scan!!"><br>
</form>
</html>
<?php
$site = explode("\r\n", $_POST['target']);
$go = $_POST['go'];
if ($go) {
	foreach ($site as $sites) {
		$path = "wp-login.php";
		$full = ($sites).($path);
		$ch = curl_init($full);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_FAILONERROR, true);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		$exec = curl_exec($ch);
		curl_close($ch);
		if (preg_match(("/Log In/"), $exec)) {
			echo "[+]URL : $full  ( Infected! )<br>";
		}else{
			echo "[+]URL : $full  ( Not Infected! )<br>";
		}
	}
}


?>