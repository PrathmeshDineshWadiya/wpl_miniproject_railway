<?php
session_start();
?>
<DOCTYPE HTML>
<HTML>
</HEAD>
<TITLE>
Ticket Booked
</TITLE>

<style type="text/css">
table
{
border: 3px solid black;
background-image: url('ticket_background.png');
background-repeat: no-repeat;
background-size: cover;
background-position: center;
}
td
{
text-align:center; 
padding: 0px 100px 0px 15px;
}
</style>

</HEAD>
<BODY>
<?php
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
date_default_timezone_set('Asia/Calcutta'); 
$current_time=date("H:i:s a"); 
$name=$_SESSION['username'];
$query="SELECT * FROM booking_ticket";
$query_run=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($query_run))
{
$source_station=$row['source'];
$destination_station=$row['destination'];
$date=$row['date'];
$acn=$row['aadhaar_no'];
$seat_type=$row['seat_type'];
$ticket_type=$row['ticket_type'];
$category=$row['category'];
$vstatus=$row['vaccination_status'];
$total_tickets=$row['total_ticket'];
$ticket_number=$row['ticket_no'];
}
}
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center>
<table>
<tr>
<th>Happy Journey</th>
<th><img style="width: 100px; height: 100px; padding: 0px 0px 0px 140px;" src="ticket_stamp.png"></th>
</tr>
<tr>
<th colspan="2">Mumbai Suburban Railways</th>
</tr>
<tr>
<td style="padding: 0px 0px 20px 5px;"><label for="date" style="text-align: center; float : left;">Date :  <?php echo($date); ?></label></td>
<td style="padding: 0px 0px 20px 100px;"><label for="time" style="text-align: center; float : left;">Time :  <?php echo($current_time); ?></label></td>
</tr>
<tr>
<td><label for="name" style="text-align: center; float : left;">Name : <?php echo($name); ?></label></td>
<td rowspan="7" style="padding: 0px 30px 0px 30px;"><label for="ticket_no">Ticket Number : <?php echo($ticket_number); ?></label></td>
</tr>
</tr>
<td><label for="source" style="text-align: center; float : left;">Source :  <?php echo($source_station); ?></label></td>
</tr>
<tr>
<td><label for="destination" style="text-align: center; float : left;">Destination :  <?php echo($destination_station); ?></label></td>
</tr>
<tr>
<td><label for="acn" style="text-align: center; float : left;">Aadhaar Card Number :  <?php echo($acn); ?></label></td>
</tr>
<tr>
<td><label for="seat" style="text-align: center; float : left;">Seat Type :  <?php echo($seat_type); ?></label></td>
</tr>
<tr>
<td><label for="ticket" style="text-align: center; float : left;">Ticket Type :  <?php echo($ticket_type); ?></label></td>
</tr>
<tr>
<td><label for="category" style="text-align: center; float : left;">Category :  <?php echo($category); ?></label></td>
</tr>
<tr>
<td><label for="vaccination" style="text-align: center; float : left;">Vaccination Status :  <?php echo($vstatus); ?></label></td>
<th><img style="width: 80px; height: 80px;" src="ticket_signature.png"></th>
</tr>
<tr>
<td><label for="total_tickets" style="text-align: center; float : left; padding: 0px 0px 30px 0px;">Total Number Of Ticket :  <?php echo($total_tickets); ?></label></td>
<td style="padding: 0px 30px 30px 30px;"><label for="ticket_signature">Signature</td>
</tr>
</table>
</center>
</BODY>
</HTML>