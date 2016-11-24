<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Форма</title>
   </head>
<body>

Здрааасти: <b> <?php echo $_POST["name"]; ?></b><br>
Ваш email: <b><?php echo $_POST["email"]; ?></b><br>
Ваша биография: <b><?php echo $_POST["bio"]; ?></b><br>
Ваш пол: <b><?php echo $_POST["gender"]; ?></b><br>
Ваше хобби: <b><?php if (empty($_POST["cat1"])){echo "";} else {echo $_POST["cat1"];} ; ?>
				<?php if (empty($_POST["cat2"])){echo "";} else {echo $_POST["cat2"];} ; ?>
				<?php if (empty($_POST["cat3"])) {echo "";} else {echo $_POST["cat3"];} ; ?>
			</b><br>
Ваша страна: <b><?php echo $_POST["country"]; ?></b><br>
Ваша категория: <b>
<?php $test=$_POST['genre'];
	if ($test){
	 	foreach ($test as $t){echo ' ',$t,'<t/>';}
	} 
?></b><br>



</b><br>


</body>
</html>