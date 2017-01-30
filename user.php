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
	  session_start();
	  $_SESSION['name']=$uname;
	  header('Location:Next.php'); 
	  }
     else
     {
	   echo "";
      }
	  ?>
	  
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
<style>
body{
background-image:url(mommy1.jpg);
background-repeat:no-repeat;
}
</style>
</head>
<body bgcolor=""><p align="center" ><font size='5'/>Login</p>
<form method="post" action="" >
<p align="center" size='30' > 
			<table cellspacing='6' align='center' border=0>
				   <tr><td>Username</td><td><input type='varchar' name='uname'/><?php if(isset($_POST['uname']))echo "*Invalid";?>
           <tr></td>		    
				 <tr>
			      <td>
				     Password 
				   </td>
				   <td>
				      <font size='3'; > <input type='password' name='pwd'  /><?php if(isset($_POST['pwd']))echo "*Invalid";?>
					    </td>
				</tr>
				 <tr>
				    <td> 
					<tr><td></td><td><input type='checkbox' name='remember'/> <span>Remember me</font></span></td></tr>
                     <tr><td></td><td> <span><a href="forgot.php" target="_parent">Forgot password</a></span></td></tr></td>
					  <tr><td></td><td><input name="add" type="submit" id="add" value="Login">&nbsp;&nbsp;<input name="add" type="reset" id="add" value="Reset"></td></tr>
                       </p> 			    
				</p>
			</table>	
            </form>
   				     <h5> 
				        <p align='center'> <font size='5'><font color="red">No account?</font> 
						<a href='Register1.php' target="_parent"> Register!</a></p> 
				      </h5>
					  	
	       	 </div>
	</body>
	
</html>
