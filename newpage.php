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
span{
  color:lightgreen;

 }
</style>
</head>
<body>
<h1>Login<h1>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>User name:</td><td><input type='text' name='name'/></td></tr>
<tr><td>Password:</td><td><input type='password' name='pwd'/></td></tr>
<tr><td></td><td><input type='checkbox' name='remember' /> <span>Remember me</span></td></tr>
<tr><td></td><td> <span><a href="forgot.php">Forgot password</a></span></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>

</form>
<?php
session_start();
//your values are stored in cookies, then you can login without validate
if(isset($_COOKIE['name']) && isset($_COOKIE['pwd']))
{
    header('location:user.php');
}
// login validation in php
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('charan')  or die(mysql_error());
 $name=$_POST['name'];
 $pwd=$_POST['pwd'];
 if(isset($_POST['submit']))
{
 if($name!=''&&$pwd!='')
 {
   $query=mysql_query("select * from users where name='".$name."' and password='".$pwd."' ")  or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
    if(isset($_POST['remember']))
 {
   setcookie('name',$name, time() + (60*60*24*1));
   setcookie('pwd',$pwd, time() + (60*60*24*1));
 }
    $_SESSION['name']=$name;
    header('location:user.php');
   }
   else
   {
    echo'You entered username or password is incorrect';
   }
 }
 else
 {
  echo'Enter both username and password are correct';
 }
}
?>
</body>
</html>