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
 if(! get_magic_quotes_gpc() )
            {
               $Name = addslashes ($_POST['Name']);
               $password = addslashes ($_POST['password']);
			   $confirm_password = addslashes ($_POST['confirm_password']);
               $mobile_number = addslashes ($_POST['mobile_number']);
            }
            else
            {
			   $Name = $_POST['Name'];
               $password = $_POST['password'];
			   $confirm_password = $_POST['confirm_password'];
               $mobile_number = $_POST['mobile_number'];
            }
            $sql = "INSERT INTO users ". "(Name,password,confirm_password,mobile_number) ". "VALUES('$Name','$password','$confirm_password',$mobile_number)";
               
            mysql_select_db("charan");
            $retval = mysql_query( $sql);
            
            if(! $retval )
            {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "Entered data successfully\n";
            
            mysql_close($conn);
 ?>
            
 <html>              
 <title>
  Create your Account
  </title>
  <body background= "ball.jpg" />
  <body style='font-family: comics san ms;'>
     <div style='width: 50%; padding: 10px; border: 0px solid #e3e3e3; background-color: #black;  color: #white; margin-left: auto; margin-right: auto;'>
	      <h1><font color="black" font size="10" > REGISTER
		  </font> </h1>
		  <br />
		   <form action='' method='post'>
		    <table>
			<form method="post" action="<?php $_PHP_SELF ?>">
                  <table width="400" border="0" cellspacing="1" cellpadding="2">
                  
                     <tr>
                        <td width="100">User Name</td>
                        <td><input name="name" type="text" id="name"></td>
                     </tr>
                  
                     <tr>
                        <td width="100">Password</td>
                        <td><input name="password" type="text" id="password"></td>
                     </tr>
                  
                     <tr>
                        <td width="100">Confirm password</td>
                        <td><input name="confirm_password" type="text" id="confirm_password"></td>
                     </tr>
                  
                     <tr>
                        <td width="100"> </td>
                        <td> </td>
                     </tr>
					  <tr>
                        <td width="100">Mobile Number</td>
                        <td><input name="mobile_number" type="number" id="mobile_number"></td>
                     </tr>
                  
                     <tr>
                        <td width="100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width="100"> </td>
                        <td>
                           <input name="add" type="submit" id="add" value="Add user">
                        </td>
                     </tr>
                  
                  </table>
				  </form>
			   <tr>
                  <FORM> <br> <INPUT Type="button" VALUE="Back"  onClick="history.go(-1);return true;"> </br></FORM>
				</tr>
				</table>
			</form>
         </div>
     </body>
</html>	 