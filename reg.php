<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="bookingproject";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$email = $_POST["email"];
$password = $_POST["password"];

//create connection

$conn = new mysqli("localhost","root","","bookingproject");

//check connection
if($conn->connect_error){
 die("Connection Failed: ".$conn->connect_error);
}

$sql = "INSERT INTO reg (fname,lname,address,email,password) VALUES('$fname','$lname', '$address', '$email', '$password')";

if($conn->query($sql) == TRUE)
{
    echo "New record created successfully";
}
else 
{
echo "Error:".$sql."<br>".$conn->error;
}
?>