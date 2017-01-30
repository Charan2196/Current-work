<?php
//step1
 $db = mysql_connect("localhost","root",""); 
 if (!$db) {
 die("Database connection failed miserably: " . mysql_error());
 }
 //step2
 $db_select = mysql_select_db("charan",$db);
 if (!$db_select) {
 die("Database selection also failed miserably: " . mysql_error());
 }
  error_reporting(0);
?>
<html>
   <title> 
        Telangana Online Birth Certificate  
  </title>
  <div>
	<div>
	<?php include "index.php";?>
	</div>
	<div>
	<?php include "user.php";?>
	
	</div>
	
		</html>