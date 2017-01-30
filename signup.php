<?php
//step1
 $conn = mysql_connect("localhost","root",""); 
 //step2
 $db = mysql_select_db("technotip",$conn);
 ?>
 <?php
            $username = $_POST['p'];
			$password = $_POST['n'];
			$sql =  "INSERT INTO phplogin values('".$username."','".$password."')";
			$qury = mysql_query($sql);
			
		if(!$qury)
		{	
		 	 echo "Failed ";
			 echo "<br /><a href= 'login.php'>signup</a>";
		}
		else
		{
             echo "Successful"; 
             echo "<br /><a href= 'login.php'>signup</a>";			 
		}
?>