<?php
//step1
error_reporting(0);
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
<?php
     $admin= $_POST['admin'];
	 $password= $_POST['password'];
	 $sql = " SELECT COUNT(*) FROM admin WHERE(
	 admin='".$admin."' && password='".$password."')";
	 
	 //SELECT COUNT(*) FROM phplogin WHERE(
	 //username='$uname' and password='$pass');
	 
	 $qury =mysql_query($sql);
     $result = mysql_fetch_array($qury);

    if($result [0]>0)	 
    {
	   echo "<br /><a href= 'http://localhost/phpmyadmin/index.php?token=873604e844d9900710f2f239176fff71' target='_top'>Continue to Database</a>";
	 }
     else
     {
	   echo "";
      }	
?>
<html><p align="center" >
<head>
	  <body background="mommy1.jpg" > 
	  <body font="400">
	  <body style='font-family:Comic Sans Ms;'>
	  <div style='width: 85%; padding: 90px; border: 0px solid #e3e3e3; background-color: #black; color: #000; margin-left: auto; margin-right: auto;'>
	  <html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:6px;
 }
 h1{
  color:darkblack;
  font-size:25px;
  text-align:center;
 }

</style>
</head>
<body>

<h1>Admin<h1>
<form method="post" action="" >
<table cellspacing='20' align='center' border='0'>
<tr><td>Administrator </td><td><input type='varchar' name='admin'/><?php if(isset($_POST['admin']))echo "*Invalid";?></td></tr>
 <tr><td>Master password</td><td><input type='password' name='password'/><?php if(isset($_POST['password']))echo "*Invalid";?></tr>
 </tr><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="add" type="submit" id="add" value="Login" target="_top" /><td>
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<INPUT Type="button" VALUE="Back"  onClick="history.go(-1);return true;">
                       </td> </td></tr>
</table>
</form>
</p>				
   		</div>
	</body>
</head>
</html>