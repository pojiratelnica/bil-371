<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Форма</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

   </head>
<body>
<?php
$nameErr = $emailErr = $genderErr = "";
$name = $email = $gender = $bio = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
$nameErr = "Name is required";
} else {
$name = test_input($_POST["name"]);
// check if name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  $nameErr = "Only letters and white space allowed";
}
}

if (empty($_POST["email"])) {
$emailErr = "Email is required";
} else {
$email = test_input($_POST["email"]);
// check if e-mail address is well-formed
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}
}


if (empty($_POST["comment"])) {
$comment = "";
} else {
$comment = test_input($_POST["comment"]);
}

if (empty($_POST["gender"])) {
$genderErr = "Gender is required";
} else {
$gender = test_input($_POST["gender"]);
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="container-fluid">
<div class="row">
<div class="col-lg-7">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="form-control">
<p class="error" style="color:red;">* обязательные поля</p>
	Имя: <input type="text" name="name" value="<?php echo $name;?>"> <span class="error" style="color:red;">* <?php echo $nameErr;?></span><br>
	E-mail: <input type="text" name="email" value="<?php echo $email;?>"><span class="error" style="color:red;">* <?php echo $emailErr;?></span><br><br>
	Биография:  <textarea name="bio" rows="3" cols="40"><?php echo $bio;?></textarea><br>
	<br>
	
	Пол:<br>
	
	  <input type="radio" name="gender" checked <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male"> Мужчина
	  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"> Женщина
	  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="okama") echo "checked";?> value="okama"> Окама
		<span class="error" style="color:red;">* <?php echo $genderErr;?></span>
	<br>
	
		<br>
	В какую страну хотите:<br>
	<select name="country">
	    <option value="usa">Америка</option>
	    <option value="japan">Япония</option>
	    <option value="korea">Корея</option>
	  </select>
	<br><br>
	<div class="row"><div class="col-lg-6">
	Выбрать категорию:<br>

	<select name="genre[]" multiple="multiple">
	  <option value="slash">Слэш(яой)</option>
	  <option value="drama">Драма</option>
	  <option value="yuri">Юри</option>
	  <option value="soulmates">Соулмейты</option>
	</select>
	</div>
	<div class="col-lg-6">
	Хобби:<br>
	
	  <input type="checkbox" name="cat1" value="student"> Студент<br>
	  <input type="checkbox" name="cat2" value="draw"> Рисование<br>
	  <input type="checkbox" name="cat3" value="read"> Чтение
	</div>
	</div>
	<br><br>
	<input type="submit" class="btn btn-primary" >
</form>
</div>
<div class="col-lg-5"> 
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $bio;
echo "<br>";
echo $gender;
if (empty($_POST["cat1"])){echo "";} else {echo $_POST["cat1"];} ;
if (empty($_POST["cat2"])){echo "";} else {echo $_POST["cat2"];} ;
if (empty($_POST["cat3"])){echo "";} else {echo $_POST["cat3"];} ;
echo "<br>";
echo $_POST["country"];
echo "<br>";

$test=$_POST['genre'];
	if ($test){
	 	foreach ($test as $t){echo ' ',$t,'<t/>';}
} 
echo "<br>";
?>
</div>
</div>
</div>
</body>
</html>