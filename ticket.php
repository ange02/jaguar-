
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("jaguar",$conn);

$fname=$_POST['fname'];
$sname=$_POST['sname'];
$seatno=$_POST['seatno'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$from_plc=$_POST['from_plc'];
$to_plc=$_POST['to_plc'];
$departure_tm=$_POST['departure_tm'];
$arrival_tm=$_POST['arrival_tm'];
$date=$_POST['date'];

$sql=mysql_query ("insert into ticket (fname,sname,seatno,gender,email,phone,address,from_plc,to_plc,departure_tm,arrival_tm,date) values('$fname','$sname','$seatno','$gender','$email','$phone','$address','$from_plc','$to_plc','$departure_tm','$arrival_tm','$date')");
echo "thank for buying a ticket!!! ";
?>

.style1 {font-size: 36px}
#Layer1 {
	position:absolute;
	width:345px;
	height:234px;
	z-index:1;
	left: 39px;
	top: 369px;
	background-color: #FFCCFF;
}
#Layer2 {
	position:absolute;
	width:274px;
	height:228px;
	z-index:2;
	left: 954px;
	top: 368px;
	background-color: #FFCCFF;
}
#Layer3 {
	position:absolute;
	width:548px;
	height:56px;
	z-index:3;
	left: 404px;
	top: 594px;
	background-color: #6699FF;
}
#Layer4 {
	position:absolute;
	width:1233px;
	height:76px;
	z-index:4;
	left: 60px;
	background-color: #FFCCFF;
}
-->
</style>
</head>

<body bgcolor="#CCFF66">
<form id="form1" name="form1" method="post" action="">
  <div align="center">
    <div id="Layer4"><span class="style1">TICKECT </span></div>
    <p class="style1">&nbsp;</p>
    <p class="style1"><img src="images/1000648_603782243032681_1069216762_n.jpg" width="400" height="250" alt="MKM" /><img src="images/1000648_603782243032681_1069216762_n.jpg" width="400" height="250" alt="MKM" /><img src="images/1000648_603782243032681_1069216762_n.jpg" width="400" height="250" alt="MKM" /></p>
    <table width="1296" border="0" bordercolor="#00FFFF">
      <tr>
        <td width="219" height="23"><a href="home.php">home</a></td>
        <td width="193"><a href="about us.php">about</a></td>
        <td width="236"><a href="ticket.php">booking_ticket</a></td>
        <td width="236"><a href="contact us.php">contact</a></td>
        <td width="390"><a href="gallery.php">gallery</a></td>
      </tr>
    </table>
    <div id="Layer1">
      <table width="322" height="239" border="0">
        <tr>
          <td width="134">FIST NAME </td>
          <td width="178"><label>
            <input name="fname" type="text" id="fname" />
          </label></td>
        </tr>
        <tr>
          <td>SECOND NAME </td>
          <td><input name=" sname" type="text" id=" sname" /></td>
        </tr>
        <tr>
          <td height="42">SEAT NUMBER </td>
          <td><input name="seatno" type="text" id="seatno" /></td>
        </tr>
        <tr>
          <td height="48">GENDER  </td>
          <td><label>
            <input name="gender" type="text" id="gender" />
            <br />
          </label></td>
        </tr>
        <tr>
          <td>EMAIL</td>
          <td><input name="email" type="text" id="email" /></td>
        </tr>
        <tr>
          <td>PHONE</td>
          <td><input name=" phone" type="text" id=" phone" /></td>
        </tr>
      </table>
    </div>
    <div id="Layer2">
      <table width="256" height="212" border="0">
        <tr>
          <td width="89">ADDRESS</td>
          <td width="157"><input name="address" type="text" id="address" /></td>
        </tr>
        <tr>
          <td>FROM</td>
          <td><input name="from_plc" type="text" id="from_plc" /></td>
        </tr>
        <tr>
          <td>TO</td>
          <td><input name="to_plc" type="text" id="to_plc" /></td>
        </tr>
        <tr>
          <td>DEPARTURE</td>
          <td><input name="departure_tm" type="text" id="departure_tm" /></td>
        </tr>
        <tr>
          <td>ARRIVAL</td>
          <td><input name="arrival_tm" type="text" id="arrival_tm" /></td>
        </tr>
        <tr>
          <td>DATE</td>
          <td><input name="date" type="text" id="date" /></td>
        </tr>
      </table>
    </div>
    <p class="style1"><img src="images/article-2385603-1B2D3F9C000005DC-297_634x405.jpg" width="575" height="221" alt="JJ" /></p>
    <div id="Layer3">
      <label>
      <input type="submit" name="Submit" value="LOGIN" />
      </label>
      <table width="359" border="1">
        <tr>
          <td bgcolor="#FF00FF"><div align="center"><a href="view.php">
            <input name="Submit" type="button" value="VIEW" />
          </a></div></td>
          <td bgcolor="#00FFFF"><div align="center"><a href="view.php">
            <input name="Submit" type="button" value="UPDATE" />
          </a></div></td>
          <td bgcolor="#FFFF00"><div align="center"><a href="view.php">
            <input name="Submit" type="button" value="DELETE" />
          </a></div></td>
        </tr>
      </table>
    </div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;  </p>
  </div>
</form>
</body>
</html>
