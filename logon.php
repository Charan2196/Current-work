<?php
//step1
 $conn = mysql_connect("localhost","root",""); 
 //step2
 $db = mysql_select_db("charan",$conn);
 error_reporting(0);
 ?>
 <?php
     $uname= $_POST['uname'];
	 $pass= $_POST['pwd'];
	 $sql = " SELECT COUNT(*) FROM users WHERE(
	 Name='".$uname."' && password='".$pass."')";
	 
	 //SELECT COUNT(*) FROM phplogin WHERE(
	 //username='$uname' and password='$pass');
	 
	 $qury =mysql_query($sql);
     $result = mysql_fetch_array($qury);

    if($result [0]>0)	 
    {
      echo "you had Successfully  Login your account!";
	  echo "<br /><a href= 'Next.php' target='_blank'>Continue.................</a>";
	 }
     else
     {
	   echo "Login Failed! invalid username/password ";
      }
	  ?>	
<html>
<body bgcolor="green">
</body>
</html> 