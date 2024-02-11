<?php

if($_SERVER["REQUEST_METHOD"] == "POST" )
{
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];



    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nationals";
    $con = mysqli_connect($servername,$username,$password,$dbname);
    if(!$con)
    {
        die("error: ".mysqli_connect_error());
    }

    $query = "SELECT *FROM register WHERE  pass = '$pass'";
    $result = $con->query($query);
    if($result->num_rows == 1){
        include ("update.html");
    }
    else{
        include ("relogin.html");
    }
    $con->close();
}

?>