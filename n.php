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
 <head>
 <title>Step 5</title>
 </head>
 <body>
 <?php
 //step3
$result = mysql_query("SELECT * FROM birth_certificate", $db);
 if (!$result) {
 die("Database query failed: " . mysql_error());
 }
 //step4
  while ($row = mysql_fetch_array($result)) {
 echo "<h2>";
 echo $row[0]." ";
 echo "</h2>";
 echo "<p>";
 echo $row[1]."";
 echo "</h2>";
 echo "<p>";
 echo $row[2]."";
 echo "</h2>";
 echo "<p>";
 }
?>
 </body>
</html>
<?php
//Step5
 mysql_close($db);
?>