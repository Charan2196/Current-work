<?php
//step1
 $conn = mysql_connect("localhost","root",""); 
 //step2
 $db = mysql_select_db("charan",$conn);
 error_reporting(0);
 ?>
 <?php
     $dname= $_POST['dname'];
	 $passwd= $_POST['passwd'];
	 $sql = " SELECT COUNT(*) FROM admin WHERE(
	 admin='".$dname."' && password='".$passwd."')";
	 
	 //SELECT COUNT(*) FROM phplogin WHERE(
	 //username='$uname' and password='$pass');
	 
	 $qury =mysql_query($sql);
     $result = mysql_fetch_array($qury);

    if($result [0]>0)	 
    {
      echo "You has Loginto Administrator!";
	   echo "<br /><a href= 'http://localhost/phpmyadmin/index.php?token=873604e844d9900710f2f239176fff71' target='_parent'>Continue to Database</a>";
	 }
     else
     {
	   echo "Login Failed! invalid Admin/password";
      }	
?>	
<html>
<body bgcolor="green">
</body>
</html> 