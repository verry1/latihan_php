<?php

	if(isset($_FILES['nama_file']))
	{
		//echo "<pre>".print_r($_FILES['nama_file'],1)."<pre>";
		
		$nama_file = $_FILES['nama_file']['name'];
		$temp_name = $_FILES['nama_file']['tmp_name'];

		$dir = "upload";

		$ext = ['image/png','image/jpg','image/jpeg','image/gif'];

		if (in_array($_FILES['nama_file']['type'],$ext)) {
			move_uploaded_file($temp_name,$dir."/".$nama_file);
				echo "Berhasil upload";
				echo "<img src = 'upload/".$nama_file."'/>";
			}else{
				echo "Format file tidak bisa di upload";
			}
	}

?>
<form action="" method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<td>File</td>
			<td><input type="file" name="nama_file"></td>
		</tr>
		<tr>
			<td></td>
			<td><button type="submit">Upload</button></td>
		</tr>
	</table>
</form>