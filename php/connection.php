<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student";


    $con = mysqli_connect($hostname,$username,$password,$dbname);
        if($con){
            echo"Connection successful";
        }
        else {
            echo"Can't connect to database";
        }
?>