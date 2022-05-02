<?php
session_start();
echo "<script>alert(' Welcome ".$_SESSION['username']."!')</script>";
?>
<!doctype html>
<html>
<head>
<title>
Railway
</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="mystyle.css">

<style type="text/css">
body
{
color: white;
background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),url('home.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
background-position: center;
}

.form_border
{
padding: 0px;
margin: 240px 180px 0px 100px;
display: inline;
border: none;
text-align: left;
}

.container
{
color: white;
background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),url('home.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
background-position: center;
display: inline;
}

.container *
{
vertical-align: middle;
}

.icon
{
position: relative;
width: 30px;
height: 30px;
padding: 2px;
margin: 0px;
border-radius: 50%;
color: white;
background-color: green;
}

.sub_heading
{
font-weight: 700;
font-size: 18px;
font-family: arial;
}
</style>

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
<label class="logo"><b>Mumbai Railways</b></label>
<ul>
<li><label class="tab"><a style="border: 5px solid dodgerblue;" href="index.html">HOME</a></li></label>
<li><label class="tab"><a href="index.php">LOGOUT</a></li></label>
<li><label class="tab"><a href="Contact.html">CONTACT</a></li></label>
</ul>
</div>
</nav>

<div class="container" align="center">
<br>
<br>
<br>
<fieldset class="form_border">
<div align="center">
<label id="m" style="font-weight: 900; font-size: 48px; font-family: arial;" class="mumbai_heading" for="mumbai" onmouseover="bigText()" onmouseout="normalText()">Mumbai Suburban Railways</label>
<script type="text/javascript">
function normalText()
{
document.getElementById("m").style.fontSize="48px";
document.getElementById("m").style.color="white";
}
function bigText()
{
document.getElementById("m").style.fontSize="60px";
document.getElementById("m").style.color="lemonchiffon";
}
</script>
<br>
<br>
<label class="sub_heading">|  </label>
&nbsp;
<ion-icon class="icon" name="checkmark-circle-outline"></ion-icon>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<label class="sub_heading">Safety  |  </label>
&nbsp;
<ion-icon class="icon" name="checkmark-circle-outline"></ion-icon>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<label class="sub_heading">Security  |  </label>
&nbsp;
<ion-icon class="icon" name="checkmark-circle-outline"></ion-icon>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<label class="sub_heading">Punctuality  |  </label>
&nbsp;
<ion-icon class="icon" name="checkmark-circle-outline"></ion-icon>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<label class="sub_heading">Trustworthy  |  </label>
</div>
</fieldset>
</div>
<br>
<br>
</body>
</html>
