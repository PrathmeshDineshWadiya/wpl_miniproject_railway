<!DOCTYPE HTML>
<html>
<head>
<title>
Display
</title>
<meta charset="utf-8">
</head>
<body>
<?php
if(isset($_FILES['profileImage'])){
$errors= array();
$file_name = $_FILES['profileImage']['name'];
$file_size =$_FILES['profileImage']['size'];
$file_tmp =$_FILES['profileImage']['tmp_name'];
$file_type=$_FILES['profileImage']['type'];
$file_image=addslashes(file_get_contents($file_tmp));
$file_ext=explode('.',$file_name);
$fileext=strtolower(end($file_ext));
$extensions= array("jpeg","jpg","png");
if(in_array($file_ext,$extensions)=== true)
{
$errors[]="Extension not allowed, please choose a JPEG or JPG or PNG file.";
}
if($file_size > 2097152)
{
$errors[]='File size must be excately 2 MB';
}
if(empty($errors)==true)
{
move_uploaded_file($file_tmp,"ProfileImages/".$file_name);
}
else
{
print_r($errors);
}
}
$userName=$_POST['uname'];
$userPassword=$_POST['upassword'];
$userEmail=$_POST['uemail'];
$userPhone=$_POST['uphone'];
$userGender=$_POST['gender'];
$birthDay=$_POST['days'];
$birthMonth=$_POST['months'];
$birthYear=$_POST['years'];
$birthDate="$birthDay-$birthMonth-$birthYear";
$userAddress=$_POST['address'];
// Database Connection
$servername = "localhost";
$username = "root"; //default user name is root
$password = ""; //default password is blank
$conn = new mysqli($servername, $username, $password,'Railway');
if($conn->connect_error)
{
die("Connection Failed : ".$conn->connect_error);
}
else
{
$insert = $conn->query("INSERT into registration (username,password,email,phone,gender,dob,address,image_name,profile_image) VALUES ('$userName', '$userPassword','$userEmail','$userPhone','$userGender','$birthDate','$userAddress','$file_name','$file_image')");
$query="SELECT * FROM registration";
$query_run=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($query_run))
{
echo '<img src="data:image;charset=utf8;base64,'.base64_encode($row["profile_image"]).' " alt="Profile Image" style="width: 400px; height:400px;"></image>';
echo "<br>";
}
echo("You are registered successfully!");
$conn->close();
}
?>
</body>
</html>