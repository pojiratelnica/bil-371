<?php
$cookie_name = $_POST['cookie_name'];
$cookie_value = $_POST['cookie_value'];
setcookie($cookie_name, $cookie_value, time()+(86400*30), "/");
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Куки</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

   </head>
<body>
<?php
if(!isset($_COOKIE[$cookie_name])){
	echo "Not set";
}else{
	echo "Cookie setted";
}
?>
</body>
</html> 