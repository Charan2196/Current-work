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
 ?>
 
<html>
<body bgcolor= "#008B8B" />
  <body style='font-family: comics san ms;'>
  <div style='width: 10%; padding: 400px; border: 2px solid #e3e3e3; background-color: #black;  color: #white; margin-left: auto; margin-right: auto;'>
 <frameset rows="25%,*,25%">
  <frame src="birth.php">
  <frame src="">
  <frame src="">
</frameset>
 </div>
</body>
</html>