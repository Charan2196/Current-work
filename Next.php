<?php
session_start();
if(!isset($_SESSION['name']))
{
session_destroy();
header('Location:lay.php');
}

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
 <html>
<title>
  Application Form of Appilcant
  </title>
  <head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:2px;
 }
 h3{
  color:black;
  font-size:25px;
  text-align:center;
 }
span{
  color:black;

 }
</style>
	  </head>
	  <body background="mommy.jpg"> 
	  <body font="7">
	  <body style='font-family: comics san ms;'>
	  <font color="#00000" size=5.5 >
     <div style='width: 50%; padding: 5px; border: 0px solid #e3e3e3; background-color: #black; color: #000; margin-left: auto; margin-right: auto;'>
	     <align="center" /> <h3>Applicant&nbsp;&nbsp;&nbsp;Details<h3> 
		 </font>
		   <form action='logop.php' method='post' target='_parent' onsubmit="return(valid());">
<table width="120%" border="0"> 
           <tr valign="top">
    <td bgcolor="" width="130" height="300">
	  <font color='black'> 
      <p>Name <pre><input name='name' type='text' style padding:='6px' ></pre></p>
	  <p>Gender <pre><input name='gender' type='char' style padding:='6px' ></pre></p>
	  <p> Regno<pre><input name='reg' type='bigint' style padding:='6px' ></pre></p>
	  <p> Surname<pre><input name='surname' type='text' style padding:='6px' ></pre></p>
	  <p>Mother Name<pre><input name='mname' type='text' style padding:='6px' ></pre></p>
	   <p>Father Name<pre><input name='pname' type='text' style padding:='6px' ></pre></p>
		 <p>Hospital Name<pre><input name='hospital' type='text' style padding:='6px' ></pre></p>
		 
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="add" type="submit" id="add" value="submit"  target="_top"  />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <INPUT Type="button" VALUE="Back"  onClick="history.go(-1);return false;"></p>
		
	   </font>
    </td>
    <td bgcolor="" width="130" height="200">
	     <font color='black'>
         <p>DOB<pre><input type="text" name="date1"  placeholder="dd-mm-yyyy"  /></pre></p>
		 <p>Time<pre><input type ="text" name="time"  placeholder=" h:m:s" /></pre></p>
		 <p>Health_status<pre><input name='status' type='text' style padding:='6px' ></pre></p>
		 <p>Mandal<pre><input name='mandal' type='text' style padding:='6px' ></pre></p>
		 <p>District<pre><input name='district' type='text' style padding:='6px' ></pre></p>
		 <p>State<pre><input name='state' type='varchar' style padding:='6px' ></pre></p>
		 <p>Pincode<pre><input name='pin' type='int' style padding:='6px' ></pre></p>
		 </font>
	</td>
  </tr>
</table>
</body>
</html>		
		
				
				     <h6> 
				        <font size='2'; > 
				      </h6>
				  
		</div>
	 </body>
	 