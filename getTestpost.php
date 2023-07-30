<?php
    header('Content-type: text/html; charset=utf-8');

    $name=$_POST['name'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    // $fruits= array($_POST['apple'],$_POST['banana'],$_POST['orange']);
    $brand=$_POST['brand'];
    $textarea=$_POST['textarea'];


    echo "<h1>$name</h1>";
    echo "$password<br><br>";
    echo "$gender<br><br>";
    echo "$brand<br><br>";
    echo "$textarea<br><br>";
    if(isset($_POST['apple'])){
        echo "apple,";
    }
    if(isset($_POST['banana'])){
        echo "banana,";
    }
    if(isset($_POST['orange'])){
        echo "orange";
    }

?>