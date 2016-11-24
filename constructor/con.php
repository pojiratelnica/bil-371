<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>КОнструктор</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

   </head>
<body>

<?php
    class Person{
        var $name;
        var $email;
        var $bio;
        var $gender;
        var $country;
        var $genre;
        var $cat1;
        var $cat2;
        var $cat3;

        function __construct($name, $email, $bio, $gender, $country, $cat1, $cat2, $cat3, $genre){
        	$this->name=$name;
        	$this->email=$email;
        	$this->bio=$bio;
        	$this->gender=$gender;
        	$this->country=$country;
        	$this->cat1=$cat1;
		    echo $this->cat1;
        	
        	$this->cat1=$cat2;
        	$this->cat1=$cat3;
        	$this->genre = $genre;
        	
        }

        function validation(){
        	echo "Привет: ";
		    if(!empty($this->name)){
		    	echo $this->name;
		    }
		    echo "<br>";
		    
		    echo "Ваш емейл: ";
		    if(!empty($this->email)){
		    	if(!preg_match("|^[-0-9a-z_]+@[-0-9a-z^\.]+\.[a-z]{2,6}$|i", $this->email)){
		    		echo "Error. Email is not true!";
		    	}
		    	else{
		    		echo $this->email;
		    	}
		    }
		    echo "<br>";
		    
		    echo "Вы: ";
		    if (isset($this->gender)){echo $this->gender;}
		    echo "<br>";

		    echo "Ваша Биография: ";
		    if(!empty($this->bio)){
		    	echo $this->bio;}
		    echo "<br>";

		    echo "Ваша страна: ";
		    if (isset($this->country)){echo $this->country;}
		    echo "<br>";

		    // error_reporting(E_ALL & ~E_NOTICE);     
		    // if (isset($this->cat1)){echo $this->cat1 . " ";}
		    echo "Ваше хобби: ";
		    echo $this->cat1;
		    if (isset($this->cat2)){echo $this->cat2 . " ";}
		    if (isset($this->cat3)){echo $this->cat3 . " ";}
		    echo "<br>";
		    
		    echo "Ваши любимые жанры: ";
		    if (isset($this->genre)){
		        foreach ($this->genre as $i){
		        	echo ' ',$i;
		        }
		    }

        }

        
    }
    
    $a=new Person($_POST['name'], $_POST['email'], $_POST['bio'], $_POST['gender'], $_POST['country'], $_POST['cat1'], $_POST['cat2'], $_POST['cat3'], $_POST['genre']);
    $a->validation();

?>
</body>
</html> 