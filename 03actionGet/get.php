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

Здрааасти: <b> <?php echo $_GET["name"]; ?></b><br>
Ваш email: <b><?php echo $_GET["email"]; ?></b><br>
Ваша биография: <b><?php echo $_GET["bio"]; ?></b><br>
Ваш пол: <b><?php echo $_GET["gender"]; ?></b><br>
Ваше хобби: <b><?php if (empty($_GET["cat1"])){echo "";} else {echo $_GET["cat1"];} ; ?>
				<?php if (empty($_GET["cat2"])){echo "";} else {echo $_GET["cat2"];} ; ?>
				<?php if (empty($_GET["cat3"])) {echo "";} else {echo $_GET["cat3"];} ; ?>
            </b><br>
Ваша страна: <b><?php echo $_GET["country"]; ?></b><br>
Ваша категория: <b><?php $test=$_GET['genre'];
	if ($test){
	 foreach ($test as $t){echo ' ',$t,'<t/>';}
	} ?></b><br>



</b><br>


</body>
</html>