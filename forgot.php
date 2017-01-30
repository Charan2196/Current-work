<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }

</style>
</head>
<body>
<h1>Forgot Password<h1>
<form action=' ' method='post'>
<table cellspacing='5' align='center'>
<tr><td>Email id:</td><td><input type='varchar' name='mail'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
error_reporting(0);
{ 
 mysql_connect('localhost','root','');
 mysql_select_db('charan') or die(mysql_error());
 $email=$_POST['email'];
 $password=$_POST['password'];
 $query = mysql_query("select `password`from `user` where (email='".$email."')");
 $p = mysql_affected_rows();
 if($p =0) 
 {
  mysql_error();
  }
   else
   {
  $res=mysql_query($query);
  $password=$row["password"];
  $to=$row['mail'];
  $subject='Remind password';
  $content= "your password is" .$password; 
  $header ='From:charandestroyer@gmail.com';
  $m=mail($to,$subject,$message,$headers);
  }
  if($m=1)
  {
    print "Check your inbox in mail";
  }
  else
 {
  echo'You entered mail id is not present';
 }
}
?>
</body>
</html>