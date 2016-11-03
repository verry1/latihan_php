<?php
session_start();

// $_SESSION['isLoggedIn'] = false;
// unset(['isLoggedIn']);

if(isset($_SESSION['isLoggedIn'])) {
	if($_SESSION['isLoggedIn']==false) {
		header("location:login.php");
	}
}else{
	header("location:login.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ul>
		<li><a href="?p=condition">Condition</a></li>
		<li><a href="?p=variabel">Variabel &amp; Operator</a></li>
		<li><a href="?p=looping">looping</a></li>
		<li><a href="?p=array">Array</a></li>
	</ul>
	<?php
		switch ($_GET['p']) {
			case 'condition':
				echo "<h1>Condition</h1>";
				include 'condition.php';
				break;
			case 'variabel':
				echo "<h1>Variabel</h1>";
				include 'variabel_operator.php';
				break;
			case 'looping':
				echo "<h1>Looping</h1>";
				include 'looping.php';	
				break;
			case 'array':
				echo "<h1>Array</h1>";
				include 'array.php';
				break;
			default:
				echo "404 NOT FOUND";
				break;
		}
	?>
</body>
</html>