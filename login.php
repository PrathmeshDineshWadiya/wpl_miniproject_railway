<!doctype html>
<html>
<head>
<title>
Login Form
</title>

<link rel="stylesheet" href="mystyle.css">

<style type="text/css">

body
{
background-image: url('image1.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
background-position: center;
}

.form_heading
{
color: black;
background-color: darkslateblue;
border-radius: 10px 10px 0px 0px;
padding: 6px;
}

.form_heading *
{
vertical-align: middle;
}

.form_border
{
padding: 0px;
margin: 0px;
display: inline;
border-style: dashed solid;
border-width: 10px 5px;
border-radius: 12px;
border-color: navy;
box-shadow: -5px 10px 30px 10px lightyellow;
background-color: rgba(255,255,255,0.8);
text-align: left;
}

.field_heading
{
width : 100px;
display: inline-block;
color: darkgreen;
text-shadow: 2px 2px 10px greenyellow;
font-size: 22px;
font-family: fantasy;
margin-left: 6px;
text-align: center;
}

.field
{
width: 300px;
padding: 8px 8px;
margin: 8px 20px 8px 0px;
border-style: solid;
border-width: 4px 4px;
border-radius: 15px;
border-color: navy;
box-sizing: border-box;
color: navy;
background-color: aquamarine;
font-weight: 900;
font-size: 18px;
}

.field-icon 
{
width: 35px;
height: 35px;
border: 3px solid red;
color: black;
background-color: bisque;
vertical-align: middle;
border-radius: 15px;
}

.field::placeholder
{
color: navy;
font-weight: bold;
}

input:focus
{
background-color: yellow;
}

input:focus::placeholder
{
color: transparent;
}

#submit_button
{
width: 200px;
letter-spacing: 3px;
text-transform: uppercase;
color: darkblue;
background-image: linear-gradient(-90deg,crimson,yellow);
border-style: solid;
border-width: 3px;
border-radius: 15px 0px 0px 15px;
border-color: navy;
box-shadow: inset 0 0 0 0 azure;
transition: ease-out 0.5s;
font-weight: 900;
font-size: 22px;
font-family: arial;
}

#submit_button:hover
{
cursor: pointer;
border-width: 4px;
border-radius: 15px 0px 0px 15px;
border-color: red;
box-shadow: inset -300px 0 0 0 azure;
}

#reset_button
{
width: 200px;
letter-spacing: 3px;
text-transform: uppercase;
color: darkblue;
background-image: linear-gradient(-90deg,yellow,crimson);
border-style: solid;
border-width: 3px;
border-radius: 0px 15px 15px 0px;
border-color: navy;
box-shadow: inset 0 0 0 0 azure;
transition: ease-out 0.3s;
font-weight: 900;
font-size: 22px;
font-family: arial;
}

#reset_button:hover
{
cursor: pointer;
border-width: 4px;
border-radius: 0px 15px 15px 0px;
border-color: red;
box-shadow: inset 300px 0 0 0 azure;
}

h2
{
display: inline;
letter-spacing: 2px;
color: darkgreen;
text-shadow: 2px 2px 10px greenyellow;
font-weight: 900;
font-size: 22px;
font-family: arial;
}

#forget_password
{
display: block;
margin: 10px 0px 0px 255px;
text-decoration: underline;
color: navy;
font-size: 20px;
font-family: fantasy;
border: none;
}

#login
{
color: navy;
text-shadow: 2px 2px 10px yellow;
font-weight: 900;
font-size: 22px;
font-family: arial;
}

</style>

<script type="text/javascript">
function form_validation()
{
var valid=true;
var name_success=1;
var password_success=1;
var name=document.login.uname.value;
var password=document.login.upassword.value;
if (name=="")
{
alert("Please enter your Username!");
name_success=0;
valid=false;
}
if (password=="")
{
alert("Please enter your Password!");
password_success=0;
valid=false;
}
else if ((password.length<8) || (password.length>15))
{
alert("Password length should be between 8 - 15 characters!\nPlease re-enter your password in 'Password' box!");
password_success=0;
valid=false;
}
if(name_success==0 && password_success==0)
{
document.login.upassword.value="";
document.login.uname.focus();
}
else if(name_success==0 && password_success==1)
{
document.login.uname.focus();
}
else if(name_success==1 && password_success==0)
{
document.login.upassword.value="";
document.login.upassword.focus();
}
return valid;
}
</script>

</head>

<body>

<nav>
<div class="navbar">
<div class="dropdown">
<button class="menubutton"><ion-icon class="menu-icon" name="menu-outline"></ion-icon>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script></button>
<div class="dropdown-content">
<a href="Booking.html">Book Ticket</a>
<a href="E-Pass.html">E-Pass</a>
<a href="#">History</a>
</div>
</div>
<label class="logo">Mumbai Railways</label>
<ul>
<li><label class="tab"><a href="index.php">HOME</a></li></label>
<li><label class="tab"><a href="Registration.html">REGISTER</a></li></label>
<li><label class="tab"><a  style="border: 5px solid dodgerblue;" href="login.php">LOGIN</a></li></label>
<li><label class="tab"><a href="Contact.html">CONTACT</a></li></label>
</ul>
</div>
</nav>

<br>
<br>
<br>
<div align="center">
<form action="validate.php" method="post" name="login" autocomplete="on" onsubmit="return form_validation();" novalidate>
<fieldset class="form_border">
<div class="form_heading">
<img style="margin: 0px 80px 0px 0px; padding: 0px 0px 0px 0px; width: 100px; height: 100px; background-color: honeydew;" src="login-icon.png">
<label style="width: 400px; color: white;  text-align: center; font-size: 40px; font-variant: small-caps; font-family: Arial;"><b>LOGIN</b></label>
</div>
<br>
<br>
<label class="field_heading"><ion-icon class="field-icon" name="person-circle"></ion-icon>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script></label>
	<input type="text" class="field" name="uname" placeholder="Enter Username!">
<br>
<br>
<label class="field_heading"><ion-icon class="field-icon" name="lock-closed"></ion-icon>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script></label>
	<input type="password" class="field" name="upassword" placeholder="Enter Password!">
<a id="forget_password" href="Password-Recovery.html">forget password?</a>
<br>
<center>
	<input type="checkbox" name="remember" value="Remember Me" id="remember">
	<label for="remember" onmousemove="mouseMove(this)" onmouseout="mouseOut(this)">Remember Me</label>
<script type="text/javascript">
function mouseMove(l)
{
l.style.backgroundColor="yellow";
}
function mouseOut(l) 
{
l.style.backgroundColor="aquamarine";
}
</script>
</center>
<br>
<br>
<div class="container" align="center">
	<input id="submit_button" type="submit" name="submit" value="Login">
	<input id="reset_button" type="reset" name="reset" onclick="login_reset();" value="Reset">
<script type="text/javascript">
function login_reset()
{
document.login.uname.value="";
document.login.upassword.value="";
document.login.uname.focus();
}
</script>
<br>
<br>
<br>
<h2>Not a Member? - </h2><a id="login" href="Registration.html">Register</a>
<br>
<br>
<br>
</div>
</fieldset>
</form>
</div>
<br>
<br>
</body>
</html>
<?php
if(isset($_COOKIE['username']) and isset($_COOKIE['password'])) 
{
$name=$_COOKIE['username'];
$password=$_COOKIE['password'];
echo "<script>
document.login.uname.value='$name';
document.login.upassword.value='$password';
</script>";
}
?>