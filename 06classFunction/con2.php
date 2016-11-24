<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Классовым функцией</title>
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
        // var $genre=array('', '', '', '');
        var $cat1;
        var $cat2;
        var $cat3;

        function setName($name){$this->name=$name;}
        function setEmail($email){$this->email=$email;}
        function setBio($bio){$this->bio=$bio;}
        function setGender($gender){$this->gender=$gender;}
        function setCountry($country){$this->country=$country;}
        // function setGenre($genre){$this->$genre =$genre;}
        function setCat1($cat1){$this->cat1=$cat1;}
        function setCat2($cat2){$this->cat2=$cat2;}
        function setCat3($cat3){$this->cat3=$cat3;}
        
        function getName(){return $this->name;}
        function getEmail(){return $this->email;}
        function getBio(){return $this->bio;}
        function getGender(){return $this->gender;}
        function getCountry(){return $this->country;}
        function getCat1(){return $this->cat1;}
        function getCat2(){return $this->cat2;}
        function getCat3(){return $this->cat3;}
        // function getGenre(){return $this->$genre;}
    }  
 ?>

<?php
    $a=new Person();
    $a->setName($_POST['name']);
    $a->setEmail($_POST['email']);
    $a->setBio($_POST['bio']);
    $a->setGender($_POST['gender']);
    $a->setCountry($_POST['country']);
    $a->setCat1($_POST['cat1']);
    $a->setCat2($_POST['cat2']);
    $a->setCat3($_POST['cat3']);
    // $a->setGenre($_POST['genre']);

    echo "Привет: ";
    // echo $a->getName();
    if (!empty($a->getName())){echo $a->getName();};
    echo "<br>";

    echo "Email: ";

    if (!empty($a->getEmail())) {echo $a->getEmail();}
    // else if(!preg_match("|^[-0-9a-z_]+@[-0-9a-z^\.]+\.[a-z]{2,6}$|i", $a->getEmail()))
    // {echo "Error. Email is not true!";};
    echo "<br>";
    

    echo "Ваша Биография: ";
    if (!empty($a->getBio())){echo $a->getBio();}
    echo "<br>";


    // echo "Ваше хобби: ";
    // error_reporting(E_ALL & ~E_NOTICE);     
    // if ( isset($a->getCat1()) || isset($a->getCat2()) || isset($a->getCat3()) ){
    //     echo " ". $a->getCat1()." ". $a->getCat2()." ".$a->getCat3();
    // };
    // echo "<br>";


    echo "Вы: ";
    // if (isset($a->getGender())){echo $a->getGender();};
    echo "<br>";

    
    // echo "Ваша страна: ";
    // if (isset($a->getCountry())){echo $a->getCountry();}
    // echo "<br>";
    

    // echo "Ваши любимые жанры: ";
    // if (isset($a->getGenre())){
    //     foreach ($a->getGenre() as $i){
    //         echo ' ',$i;
    //     }
    // }
?>
</body>
</html> 