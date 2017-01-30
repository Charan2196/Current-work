<?php
//step1
 $conn = mysql_connect("localhost","root",""); 
 //step2
 $db = mysql_select_db("technotip",$conn);
 ?>
 <?php
     $uname= $_POST['uname'];
	 $pass= $_POST['pwd'];
	 $sql = " SELECT COUNT(*) FROM phplogin WHERE(
	 username='".$uname."' && password='".$pass."')";
	 
	 //SELECT COUNT(*) FROM phplogin WHERE(
	 //username='$uname' and password='$pass');
	 
	 $qury =mysql_query($sql);
     $result = mysql_fetch_array($qury);

    if($result [0]>0)	 
    {
      echo "Successful Login!";
	 }
     else
     {
	   echo "Login Failed";
      }	
?>	  