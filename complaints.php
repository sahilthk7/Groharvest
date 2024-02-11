<?php
    $location = $_GET['location'];
    $datetime = $_GET['datetime'];
    $details = $_GET['details'];


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nationals";
    $con = mysqli_connect($servername,$username,$password,$dbname);
    if(!$con)
    {
        die("error: ".mysqli_connect_error());
    }

    
        $sql = "INSERT INTO `complaints` (`location`, `datetime`, `details`) VALUES ('$location', '$datetime', '$details')";
        if(mysqli_query($con,$sql))
        {

            include ("helpline1.html");
        }
        else
        {
            echo "something went wrong...";
        }
