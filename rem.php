<?php
session_start();
//your values are stored in cookies, then you can login without validate
if(isset($_COOKIE['uname']) && isset($_COOKIE['pwd']))
{
    header('location:user.php');
}
// login validation in php
if(isset($_POST['submit']))
{
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('charan')  or die(mysql_error());
 $Name=$_POST['uname'];
 $pwd=$_POST['pwd'];
 if($Name!=''&&$pwd!='')
 {
   $query= "SELECT COUNT(*) from users WHERE(Name='".$uname."' and password='".$pwd."' )";
   mysql_query($query);
   $res=mysql_fetch_row($query);
   if($res)
   {
    if(isset($_POST['remember']))
 {
   setcookie('Name',$uname, time() + (60*60*24*1));
   setcookie('pwd',$pwd, time() + (60*60*24*1));
 }
    $_SESSION['Name']=$uname;
    header('location:user.php');
   }
   else
   {
    echo'You entered username or password is incorrect';
   }
 }
 else
 {
  echo'Enter both username and password';
  echo "<br /><a href= 'Next.php' target='_parent'>Continue.................</a>";
 }
}
error_reporting(0);
?>