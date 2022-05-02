<?php
$userName=$_POST['uname'];
$userPassword=$_POST['upasssword'];
$currentDateTime=NOW();
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
$query="SELECT * FROM registration";
$query_run=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($query_run))
{
if($row['username']==$username)
{
$userId=$row['user_id'];
break;
}
}
$insert = $conn->query("INSERT into login (user_id,username,password,date_time) VALUES ('$userId','$userName', '$userPassword','$currentDateTime')");
$conn->close();
}
?>