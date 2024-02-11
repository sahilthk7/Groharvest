<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
body{
        background: url(./images/register-bg.jpg);
        opacity:80%;
      }
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>location</th>
<th>date and time</th>
<th>details</th>
</tr>

<?php
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nationals";
$con = mysqli_connect($servername,$username,$password,$dbname);
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}
$sql = "SELECT * FROM `complaints`";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["location"]. "</td><td>" . $row["datetime"] . "</td><td>"
            . $row["details"]. "</td></tr>";
            }
            echo "</table>";
            } else { echo "0 results"; }
            $con->close();
?>

</table>
</body>
</html>

