<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials</title>
</head>

<body>

<style>
    a{
        text-decoration: none;
        color:green;
        font-size: 34px;
    }
    a:hover{
        color:blue;
    }
</style>
    <center><h1>PHP Tutorials</h1></center>
    <?php
        echo "Courses from w3Schools :-)";
    ?>
    <br>
    <a href="variables/"  rel="noopener noreferrer">Variables</a><br>
    <a href="?object=true"  rel="noopener noreferrer">PHP Object</a>

    <?php
        if(isset($_GET['object']) == true){
            header('Location: file handling/');
        }
    ?>
</body>

</html>