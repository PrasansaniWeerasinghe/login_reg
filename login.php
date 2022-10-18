<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="bookingproject";

$uname = $_POST["uname"];
$password = $_POST["password"];

//create connection

$conn = new mysqli("localhost","root","","bookingproject");

//check connection
if($conn->connect_error){
 die("Connection Failed: ".$conn->connect_error);
}

$sql = "INSERT INTO login (uname,password) VALUES('$uname','$password')";

if($conn->query($sql) == TRUE)
{
    echo "New record created successfully";
}
else 
{
echo "Error:".$sql."<br>".$conn->error;
}
?>