<?php
    $feedback = $_GET['feedback'];
    $review = $_GET['review'];
    $thoughts = $_GET['thoughts'];


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nationals";
    $con = mysqli_connect($servername,$username,$password,$dbname);
    if(!$con)
    {
        die("error: ".mysqli_connect_error());
    }

    
        $sql = "INSERT INTO `response` (`feedback`, `review`, `thoughts`) VALUES ('$feedback', '$review', '$thoughts')";
        if(mysqli_query($con,$sql))
        {

            include ("helpline1.html");
        }
        else
        {
            echo "something went wrong...";
        }
