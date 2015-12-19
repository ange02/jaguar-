<?php
require("conn.php");
$id = $_REQUEST['id'];

$result = mysql_query("SELECT * FROM ticket WHERE id  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$fname= $test['fname'] ;
				$sname= $test['sname'] ;	
			    $seatno= $test['seatno'] ;			
				$gender= $test['gender'] ;
				$email= $test['email'] ;
				$phone= $test['phone'] ;
				$address= $test['address'] ;
				$from_plc= $test['from_plc'] ;
				$to_plc= $test['to_plc'] ;
				$departure_tm= $test['departure_tm'] ;
				$arrival_tm= $test['arrival_tm'] ;
				$date= $test['date'] ;
				
if(isset($_POST['save']))
{	
               	$fname= $test['fname'] ;
				$sname= $test['sname'] ;	
			    $seatno= $test['seatno'] ;			
				$gender= $test['gender'] ;
				$email= $test['email'] ;
				$phone= $test['phone'] ;
				$address= $test['address'] ;
				$from_plc= $test['from_plc'] ;
				$to_plc= $test['to_plc'] ;
				$departure_tm= $test['departure_tm'] ;
				$arrival_tm= $test['arrival_tm'] ;
				$date= $test['date'] ;
	

mysql_query("UPDATE ticket SET fname ='$fname', sname ='$sname', seatno ='$seatno', gender ='$gender', email ='&email',phone ='$phone', address ='$address', from_plc ='$from_plc', to_plc ='$to_plc', departure_tm ='$departure_tm', arrival_tm ='$arrival_tm', date ='$date' WHERE id = '$id'") or die(mysql_error()); 
echo "Ticket Successfully Updated!";
	
			
}
mysql_close($conn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Jaguar Buses</title>
</head>

<body bgcolor="#99CCCC">
<table bgcolor="#DDDDDD" width="764" border="0" align="center">
  <tr>
    <td width="585" height="510" align="center" valign="top"><p>&nbsp;</p>
    <h2>&nbsp;</h2>
    <form id="form1" name="form1" method="post" action="">
        <table width="257" align="center">
          <tr>
            <td width="86"><strong>First Name</strong></td>
            <td width="159"><input name="fname" type="text" id="fname" value="<?php echo $fname ?>"/></td>
          </tr>
          <tr>
            <td><strong>Sur Name</strong></td>
            <td><input name="sname" type="text" id="sname" value="<?php echo $sname ?>"/></td>
          </tr>
		  <tr>
            <td><strong>Seat No </strong></td>
            <td><input name="seatno" type="text" id="seatno" value="<?php echo $seatno ?>"/></td>
          </tr>
          <tr>
            <td><strong>Gender</strong></td>
            <td><input name="gender" type="text" id="gender" value="<?php echo $gender ?>"/></td>
          </tr>
          <tr>
            <td><strong>Email</strong></td>
            <td><input name="email" type="text" id="email" value="<?php echo $email ?>"/></td>
          </tr>
           <tr>
            <td><strong>Phone</strong></td>
            <td><input name="phone" type="text" id="phone" value="<?php echo $phone ?>"/></td>
          </tr>
           <tr>
            <td><strong>Address</strong></td>
            <td><input name="address" type="text" id="address" value="<?php echo $address ?>"/></td>
          </tr>
           <tr>
            <td><strong>From</strong></td>
            <td><input name="from_plc" type="text" id="from_plc" value="<?php echo $from_plc ?>"/></td>
          </tr>
          <tr>
            <td><strong>TOB</strong></td>
            <td><input name="to_plc" type="text" id="to_plc" value="<?php echo $to_plc ?>"/></td>
          </tr>
          <tr>
            <td><strong>Departure</strong></td>
            <td><input name="departure_tm" type="text" id="departure_tm" value="<?php echo $departure_tm ?>"/></td>
          </tr>
          <tr>
            <td><strong>Arrival</strong></td>
            <td><input name="arrival_tm" type="text" id="arrival_tm" value="<?php echo $arrival_tm ?>"/></td>
          </tr>
          <tr>
            <td><strong>Date</strong></td>
            <td><input name="date" type="text" id="date" value="<?php echo $date ?>"/></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="save" value="save" /></td>
          </tr>
        </table>
      </form>
    <p>&nbsp;</p></td>
  </tr>
</table>
<table bgcolor="#DDDDDD" width="764" border="0" align="center">
  <tr>

  </tr>
</table>
</body>
</html>
