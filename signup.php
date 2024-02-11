<?php
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $adhaar = $_POST['adhaar'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $location = $_POST['location'];
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
    
        
            $sql = "INSERT INTO `register` (`fname`, `mname`, `lname`, `gender`, `dob`, `adhaar`, `contact`, `email`, `location`, `uname`, `pass`) VALUES ('$fname', '$mname', '$lname', '$gender', '$dob', '$adhaar', '$contact', '$email', '$location', '$uname', '$pass')";
            if(mysqli_query($con,$sql))
            {
    
                include ("login.html");
            }
            else
            {
                include ("failedsignup.html");
            }
    