<html>
<title>
  Birth Certificate
  </title>
  <?php
//step1
 $conn = mysql_connect("localhost","root",""); 
 //step2
 $db = mysql_select_db("charan");
 error_reporting(0);
 ?>
   <?php
     $Name = $_POST['name'];
	 $Gender  = $_POST['gender'];
	 $surnam = $_POST['surname'];
	  $regno = $_POST['reg'];
	 $Mother = $_POST['mname'];
	 $Father = $_POST['pname'];
	 $Hospital = $_POST['hospital'];
	 $dat = $_POST['date1'];
	 $tim = $_POST['time'];
     $status = $_POST['status'];
	 $man = $_POST['mandal'];
	 $dis = $_POST['district'];
	 $state = $_POST['state'];
	 $pinc = $_POST['pin']; 
	 $sql = "SELECT COUNT(*) FROM birth_certificate WHERE(Name='".$Name."' && Gender='".$Gender."' && Surname='".$surnam."' && Regno='".$regno."' && Mother_Name='".$Mother."' && Father_Name='".$Father."'  && Hospital_name='".$Hospital."'  && Date ='".$dat."' && Time ='".$tim."' && health_status='".$status."' && Mandal ='".$man."' && District ='".$dis."' && State ='".$state."' && Pincode ='".$pinc."')";
	 $qury = mysql_query($sql);
     $result = mysql_fetch_array($qury);
	 
     if($result [0]>0)	 
      {
	  
      echo "$Name Your Birth certificate is Generated.\n";
	  echo"<p align='center'/>";
	  session_start();
	  $_SESSION['name']=$Name;
	  $_SESSION['regno']=$regno;
	  echo "<a href='birth.php'>Continue</a>";
	  //echo " $Name,$Gender,$Mother_Name,$Father_Name,$Mother_adhaar,$Father_adhaar,$Date,$Time,$Mandal,$District,$State,$pincode";
       }
     else
      {
	   echo"<script> alert('Data entered is not available!')</script>";
	   include"Next.php";
      }	
?>

 <form method='post' action="birth.php">
 <body background='mn.jpg'/>
 </html>