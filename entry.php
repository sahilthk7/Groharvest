<?php
    $uid = $_POST['uid'];
    $crop = $_POST['crop'];
    $state = $_POST['state'];
    $quantity = $_POST['quantity'];
    $kgprice = $_POST['kgprice'];
    $seed = $_POST['seed'];
    $land = $_POST['land'];
    $fertilizer = $_POST['fertilizer'];
    $income = $_POST['income'];


        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "nationals";
        $con = mysqli_connect($servername,$username,$password,$dbname);
        if(!$con)
        {
            die("error: ".mysqli_connect_error());
        }
    
        
            $sql = "INSERT INTO `entry` (`uid`, `crop`, `state`, `quantity`, `kgprice`, `seed`, `land`, `fertilizer`, `income`) VALUES ('$uid', '$crop', '$state', '$quantity', '$kgprice', '$seed', '$land', '$fertilizer', ' $income')";
            if(mysqli_query($con,$sql))
            {
    
                include ("updated.html");
            }
            else
            {
                include ("reupdate.html");
            }
    