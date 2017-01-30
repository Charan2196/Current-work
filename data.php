<?php
session_start();
require("lay.php");
if ($_SESSION['username']) {
    header("Location: user.php");
} else
$msg = "";
if (isset($_POST['login'])) {
$username =  urlencode($_POST['username']);
$password =  urlencode($_POST['password']);
$query = mysql_query("SELECT * FROM 'users' WHERE username='$user' AND password='$pass'");
$numrows = mysql_num_rows($query);
if($numrows!=0)
{
while ($row = mysql_fetch_assoc($query)) {
    $username = $row['username'];
    $pw = $row['password'];
}
if($user==$username&&$pass==$pw) {
    $_SESSION['username']=$username;
    $msg = "Successfully logged in.";
    header("Location: Next.php");
} else {
$msg = "Username or Password is invalid.";
}
}
}
?>
<html>
<head>
<title>Config Database: Authorization</title>
<link href='css/style.css' rel='stylesheet' type='text/css' media='all' />
</head>
<body>
<div id="container">
<span style="float: right;">
[ <a href='Next.php'>authorization</a> ]
[ <a href='Register1.php'>registration</a> ]
</span>
<br>
<center><h1>Authorization</h1></center>

<form action="" method="POST">
<div class="reg">
<span class="reg_line">
<?php if(!empty($msg)) { echo $msg; } ?>
</span><br><br>
<span class="reg_line">
<label>Username</label><br>
<input type="text" name="user" />
</span><br>
<span class="reg_line">
<label>Password</label><br>
<input type="password" name="pass" />
</span><br>
<input type="submit" value="Login" name="login" />
</div>
</form>
</div>
<center>Config Database by UnfedZombie</center>
</body>
</html>

db_config.php:
    <?php

$db_host = 'localhost';
$db_user = 'unfed_config';
$db_pass = 'MyPassHere';
$db_name = 'unfed_config';

$connect = mysql_connect('localhost','root','') or die("Couldn't connect");
mysql_select_db("charan") or die ("Database not found");

?>