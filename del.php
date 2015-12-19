<?php
  include("conn.php");  

	$id =$_REQUEST['id'];
	
	
	// sending query
	mysql_query("DELETE FROM ticket WHERE id = '$id'")
	or die(mysql_error());  	
	
	echo'Delete successfully Done!<br>';
	echo'<a href="view.php">Back Home</a>';
?>