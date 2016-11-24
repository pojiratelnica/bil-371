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
    <h1>File:</h1>
    <?php
        $target_dir = "/var/www/uploads/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        echo "Here your file info: <br>";
        
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)
        {
            echo "The file has been uploaded.";
            echo "<br>";
            // echo readfile($_FILES["fileToUpload"]["tmp_name"]);
        } 
        else 
        {
            echo "Error uploading your file.";
        }
        // if ($_FILES["file"]["size"] < 1024*5*1024) {
        // }
        // else 
        // {
        //     echo "File was not uploaded.";
        // } 
        // if(isset($_POST["submit"])) {
        // }
        echo "<br>";
    ?>


</body>
</html>