 <html>              
 <title>
  Create your Account
  </title>
  <head>
  <style type="text/css">
 input{
 border:1px solid olive;
 border-radius:1px;
 }
 h1{
  color:darkgreen;
  font-size:30px;
  text-align:center;
 }
span{
  color:lightgreen;

 }
 
</style>
  </head>
  <body background= "mommy.jpg" />
  <body style='font-family: Comics San MS;'>
     <div style='width: 40%; padding: 110px; border: 0px solid #e3e3e3; background-color: #FFFFFF;  color: #white; margin-left: -30; margin-right: 50;'>
	      <h1><font color="black" font size="7" > Register
		  </font> </h1>
		   
		    <table>
  <?php
    if(isset($_POST['add']))
          {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
			//session_start();
            //if(!isset($_SESSION['Name']))
            //{
            //header('Location:lay.php');
             //}
            if(! $conn )
            {
               die('Could not connect: ' . mysql_error());
            }
           if(! get_magic_quotes_gpc() )
            {
               $Name = addslashes ($_POST['Name']);
               $password = addslashes ($_POST['password']);
			   $confirm_password = addslashes ($_POST['confirm_password']);
               $mobile_number = addslashes ($_POST['mobile_number']);
			   $email = addslashes ($_POST['email']);
            }
            else
            {
			   $Name = $_POST['Name'];
               $password = $_POST['password'];
			   $confirm_password = $_POST['confirm_password'];
               $mobile_number = $_POST['mobile_number'];
			   $email = ($_POST['email']);
            }
			$sql = "INSERT INTO users ". "(Name,password,mobile_number,email) ". "VALUES('$Name','$password',$mobile_number,'$email')";    
            mysql_select_db("charan");
			$retval = mysql_query( $sql);
            if(! $retval )
            {
               echo"<script>alert('Invalid Deatils')</script>";
            }
            else
           {
		     echo "$Name Your Account is Successfully Registered\n";
			 include "logas.html";
			 mysql_close($conn);
			}
			
		}
		else
		 {
		   ?>
		   <script>
function valid()
{

var name=document.reg.Name.value;
var password=document.reg.password.value;
var confirm_password=document.reg.confirm_password.value;
var mobile_number=document.reg.mobile_number.value;
var email=document.reg.email.value;
var atpos = email.indexOf("@");
var dotpos = email.lastIndexOf(".");
if(name==""||name.length<=3||name.length>=30)
{
alert('Invalid UserName');
document.reg.Name.focus();
return false;
}
if(password=="")
{
alert('Invalid password');
document.reg.password.focus();
return false;
}
if(confirm_password != password)
{
alert('Invalid password');
document.reg.password.focus();
return false;
}
if(mobile_number==""||mobile_number.length>10||mobile_number.length<9)
{
alert('Invalid mobile_number');
document.reg.mobile_number.focus();
return false;
}
 if (atpos<1 || dotpos<atpos+2 || dotpos+2 >= email.length) 
 {
 alert('Please provide a valid email address');
 document.reg.email.focus();
 return false;
 }
}

</script>

              <form method="post" name='reg' onsubmit="return(valid());" action="">
                  <table width="500" border="0" cellspacing="10" cellpadding="11">
                  
                     <tr>
                        <td width="100">Username</td>
                        <td><input name="Name" type="text" id="Name" placeholder="Minimum 6 characters"></td>
                     </tr>
                  
                     <tr>
                        <td width="100">Password</td>
                        <td><input name="password" type="password" id="password"></td>
                     </tr>
                  
                     <tr>
                        <td width="150">Confirm password</td>
                        <td><input name="confirm_password" type="password" id="confirm_password"></td>
                     </tr>
                        <td width="150">Mobile Number</td>
                        <td><input name="mobile_number" type="text" id="mobile_number" placeholder="  exactly 10 numbers"></td>
						<tr>
                        <td width="100">Email</td>
                        <td><input name="email" type="text" placeholder="  example@example.com" id="email"></td>
                     </tr>
						 <tr><td></td><td><input name="add" type="submit" id="add" value="Register" target="_parent">&nbsp;&nbsp;&nbsp;&nbsp;<input name="back" type ="button" value="Back" onClick="history.go(-1);return true;"></td></tr>
                  </table>
				  </form>
			   </table>
			</div>
			<?php
	     }
	?>
</body>
</html>	 