<?php
 $search= mysql_connect("localhost", "root", "")or die("Cannot connect to the Server");
mysql_select_db("jaguar", $search)or die("cannot connect to the Database");
//Start to check the Submittion button
        if(isset($_POST['LOGIN']))
      {
        //Verifying the Field in the Database 
        //Posting them
		

$sql=mysql_query("select * from login where username='$username' AND password='$password'");
    if(mysql_num_rows($sql)==1){
    $report= "Login failed,Username and Password, Try Again!";
    }
      else{
      $row = mysql_fetch_array($sql);
      $_SESSION['username'] == $row[username];
      $_SESSION['password'] == $row[password];

      $report=header("location: home.php");
}}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:438px;
	height:280px;
	z-index:1;
	left: 445px;
	top: 325px;
	background-color: #00FFFF;
}
.style4 {font-size: 18px}
.style5 {font-size: 36px}
-->
</style>
</head>

<body bgcolor="#FF00FF">
<form id="form1" name="form1" method="post" action="">
  <div align="center">
    <p class="style5">LOGIN FORM  </p>
    <p><img src="images/banner1.jpg" alt="ccg" width="1287" height="72" /></p>
    <p><img src="images/images14.jpg" alt="hbjf" width="421" height="157" /></p>
    <div id="Layer1">
      <table width="347" height="183" border="0">
        <tr>
          <td width="123"><span class="style4">USER NAME </span></td>
          <td width="184"><label>
          <input name="username" type="text" id="username" size="30" />
          </label></td>
        </tr>
        <tr>
          <td>PASSWORD</td>
          <td><input name="password" type="text" id="password" size="30" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="LOGIN" type="submit" id="LOGIN" value="LOGIN" /></td>
        </tr>
      </table>
      <label></label>
    </div>
	
    <p>
    </p>
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
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;  </p>
  </div>
</form>
</body>
</html>
