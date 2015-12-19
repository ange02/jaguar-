<?php

$conn= mysql_connect("localhost","root","");
mysql_select_db("jaguar",$conn);
$sql= mysql_query("Select * From ticket");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Jaguar Buses</title>
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
}
.style2 {
	color: #000000;
	font-weight: bold;
	font-size: 18px;
}
.style3 {
	font-size: 24px;
	color: #FF00FF;
}
-->
</style>
</head>

<body bgcolor="#00FF00">
<table bgcolor="#DDDDDD" width="1216" border="0" align="center">
  <tr>
    <td width="1210" height="510" align="center" valign="top">&nbsp;
      <p class="style3">VIEW ALL DETAILS HERE </p>
         <table width="1115" border="0" align="center" bgcolor="#CCCCCC">
           <tr>
             <td width="120" height="148" align="center"><span class="style1">First Name</span></td>
             <td width="117" align="center"><span class="style2">Second Name</span></td>
             <td width="78" align="center"><strong>Seat No </strong></td>
             <td width="56" align="center"><strong>Gender</strong></td>
             <td width="57" align="center"><strong>Email</strong></td>
             <td width="64" align="center"><strong>Phone</strong></td>
             <td width="91" align="center"><strong>address</strong></td>
             <td width="57" align="center"><strong>from </strong></td>
             <td width="44" align="center"><strong>To</strong></td>
             <td width="91" align="center"><strong>Departure</strong></td>
             <td width="93" align="center"><strong>Arrival</strong></td>
             <td width="64" align="center"><strong>Date</strong></td>
             <td width="56" align="center"><strong>Edit</strong></td>
             <td width="69" align="center"><strong>Delete</strong></td>
           </tr>
           <?php
			
			
				
			$result= mysql_query("SELECT * FROM ticket");
			
			while($test = mysql_fetch_array($result))
			{
				$id = $test['id'];	
				echo "<tr bgcolor= #FFFFFF align='center'>";
				echo"<td><font color='black'>" .$test['fname']."</font></td>";
				echo"<td><font color='black'>" .$test['sname']."</font></td>";
				echo"<td><font color='black'>" .$test['seatno']."</font></td>";
				echo"<td><font color='black'>". $test['gender']. "</font></td>";
				echo"<td><font color='black'>". $test['email']. "</font></td>";
				echo"<td><font color='black'>". $test['phone']. "</font></td>";
				echo"<td><font color='black'>" .$test['address']."</font></td>";
				echo"<td><font color='black'>" .$test['from_plc']."</font></td>";
				echo"<td><font color='black'>" .$test['to_plc']."</font></td>";
				echo"<td><font color='black'>" .$test['departure_tm']."</font></td>";
				echo"<td><font color='black'>" .$test['arrival_tm']."</font></td>";
				echo"<td><font color='black'>" .$test['date']."</font></td>";
				echo"<td> <a href ='update.php?id=$id'>Edit</a>";
				echo"<td> <a href ='del.php?id=$id'>Delete</a>";
									
				echo "</tr>";
			}
			mysql_close($conn);
			?>
         </table>
      <p><a href="home.php">home</a></p>
         <p><a href="ticket.php">back to ticket </a> </p>
    <p>&nbsp;</p></td>
  </tr>
</table>
<table bgcolor="#DDDDDD" width="764" border="0" align="center">
  <tr>
  
  </tr>
</table>
</body>
</html>