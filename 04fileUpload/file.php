<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Файлы</title>
   </head>
<body>
	<?php
		$uploaddir = '/var/www/uploads/';
		// $fils = $uploaddir . basename($_FILES['userfile']['name'])
		if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir . 
			$_FILES['userfile']['name'])) {
		    print "File is valid, and was successfully uploaded.";
		} else {
		    print "There some errors!";
		}
		echo '<br>';
		echo 'Size: ', $_FILES['userfile']['size'];
		echo '<br>';
		echo pathinfo($fils, PATHINFO_EXTENSION);
		
	?>

</body>
</html>