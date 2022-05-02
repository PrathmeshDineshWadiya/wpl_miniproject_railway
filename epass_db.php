<?php
$userName=$_POST['uname'];
$sourceStation=$_POST['source'];
$destinationStation=$_POST['destination'];
$seatType=$_POST['seat'];
$category=$_POST['category'];
$vaccinationStatus=$_POST['vaccine'];
$userEmail=$_POST['uemail'];
$userGender=$_POST['gender'];
// Database Connection
$servername="localhost";
$username="root"; //default user name is root
$password=""; //default password is blank
$conn = new mysqli($servername, $username, $password,'Railway');
if($conn->connect_error)
{
die("Connection Failed : ".$conn->connect_error);
}
else
{
$statement=$conn->prepare("INSERT INTO booking_epass(name,source,destination,seat_type,category,vaccination_status,email,gender) VALUES(?,?,?,?,?,?,?,?)");
$statement->bind_param("ssssssss",$userName,$sourceStation,$destinationStation,$seatType,$category,$vaccinationStatus,$userEmail,$userGender);
$statement->execute();
echo("Successfully Inserted!");
$statement->close();
$conn->close();
}
?>