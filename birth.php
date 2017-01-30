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
 <?php
 include "logout.html";
 session_start();
 
     $name = $_SESSION['name'];
	 $regno  = $_SESSION['regno'];

	$sql="select *from birth_certificate where Regno=$regno";
	$result=mysql_query($sql);
	if($row=mysql_fetch_array($result))
	{
		if($row['issued']==0)
		{
 ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Certificate</title>
<style>
body{
margin:0 auto;
width:700px;
}
#main{
border:1px solid #000;
width:700px;
}

</style>
</head>

<body align="center">
<div id="main">
<div class="div">  <img src="birth.png" width="610" height="200" alt="" border="0px"/></div>
</body>
<div id="div2">
<?php
$sql="SELECT * FROM birth_certificate WHERE Name='".$name."' && Regno=".$regno."";
$result=mysql_query($sql);
if($row=mysql_fetch_array($result))
{
 echo"<table align='center' width=610 cellspacing='2'><tr><td align='center'><u>BIRTH CERTIFICATE</u></tr></td>";
 echo"<tr><td align='center'>(Issued Under Section 12/17)</tr></td>";
 echo"<tr><td align='center'>This is to certify the following information is taken from original record of birth which is register for 8C, circle 10 of Greater Muncipality of Corporation,Telangana State,India</td></tr>";
 echo"</table>";
 echo"<table align=center width=610 cellspacing='2'><tr><td align='left'>Child Name</td><td align='left'>".$row[0]."</td></tr>";
 echo"<tr><td align='left'>Registration number</td><td align='left'>".$row[3]."</td></tr>";
 echo"<tr><td align='left'>Gender</td><td align='left'>".$row[1]."</td></tr>";
 echo"<tr><td align='left'>Name of Father </td><td align='left'>".$row[5]."</td></tr>";
 echo"<tr><td align='left'>Name of Mother</td><td align='left'>".$row[4]."</td></tr>";
 echo"<tr><td align='left' >Date Of Birth</td><td align='left'>".$row[7]."</td></tr>";
 echo"<tr><td align='left'>Hospital Address</td><td align='left'>".$row[6]."</td></tr>";
 echo"<tr><td align='left'>Location</td><td align='left'>".$row[10]."</td></tr>";
 echo"<tr><td align='left'>City</td><td align='left'>".$row[11]."</td></tr>";
 echo"<tr><td align='left'>Date </td><td align='left'>".date("d-m-Y")."</td></tr>";
 echo"</table>";
}
$queryUp="UPDATE `birth_certificate` SET `issued` = '1' WHERE `birth_certificate`.`Regno` = $regno";
mysql_query($queryUp);
echo "</div><div class='div3'><img src='birth2.png' width=650 height=240 alt='' border='0px'/></div>";

}
else
{
echo""
?>
<html>
<head>
<meta charset="utf-8">
<title>Certificate</title>
<style>
body{
margin:0 auto;
width:700px;
}
#main{
border:2px solid #000;
width:700px;
}

</style>
</head>

<body align="center">
<div id="main">
<div class="div">  <img src="birth3.png" width="610" height="200" alt="" border="0px"/></div>
</body>
<div id="div2" >
<?php
$sql="SELECT * FROM birth_certificate WHERE Name='".$name."' && Regno=".$regno."";
$result=mysql_query($sql);
if($row=mysql_fetch_array($result))
{
 echo"<table align='center' width=610 cellspacing='2'><tr><td align='center'><u>BIRTH CERTIFICATE</u></tr></td>";
 echo"<tr><td align='center'>(Issued Under Section 12/17)</tr></td>";
 echo"<tr><td align='center'>This is to certify the following information is taken from original record of birth which is register for 8C, circle 10 of Greater Muncipality of Corporation,Telangana State,India</td></tr>";
 echo"</table>";
 echo"<table align=center width=570 cellspacing='2' ><tr><td align='left'>Child Name</td><td align='left'>".$row[0]."</td></tr>";
 echo"<tr><td align='left'>Registration number</td><td align='left'>".$row[3]."</td></tr>";
 echo"<tr><td align='left'>Gender</td><td align='left'>".$row[1]."</td></tr>";
 echo"<tr><td align='left'>Name of Father </td><td align='left'>".$row[5]."</td></tr>";
 echo"<tr><td align='left'>Name of Mother</td><td align='left'>".$row[4]."</td></tr>";
 echo"<tr><td align='left' >Date Of Birth</td><td align='left'>".$row[7]."</td></tr>";
 echo"<tr><td align='left'>Hospital Address</td><td align='left'>".$row[6]."</td></tr>";
 echo"<tr><td align='left'>Location</td><td align='left'>".$row[10]."</td></tr>";
 echo"<tr><td align='left'>City</td><td align='left'>".$row[11]."</td></tr>";
 echo"<tr><td align='left'>Date </td><td align='left'>".date("d-m-Y")."</td></tr>";
 echo"</table>";
}
echo "<div class='div3'><img src='birth2.png' width=670 height=240 alt='' border='0px'/></div>";
}
}
?> 
</div>
</body>
</html>
