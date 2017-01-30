<html>
<head>
  <title> 
        Telangana Online Birth Certificate  
  </title>
  <style>
  <body>{
  font-size:200px;
  }
</style>
<FORM METHOD="LINK" ACTION="admin.php">
<INPUT TYPE="submit" VALUE="Admin">
</FORM>  
    </head>
	  <body bgcolor="#000000"> 
	  <body font="400">
	  <body style='font-family:Comic San MS;'>
	   <font color='black'>
	  <div style='width: 100%; padding: 0px; border: 0px solid #e3e3e3; background-color: #black; color: #000; margin-left: auto; margin-right: auto;'>
	   <h1> <marquee behavior="alternate"> ONLINE BIRTH CERTIFICATE OF TELANGANA</marquee></h1>
	<p align="center"></p>
	<p id="demo"></p>
<script type="text/javascript">
       tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
       tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
        function GetClock(){
        var d=new Date();
        var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
       if(nyear<1000) nyear+=1900;
       var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;
      if(nhour==0){ap=" AM";nhour=12;}
        else if(nhour<12){ap=" AM";}
            else if(nhour==12){ap=" PM";}
               else if(nhour>12){ap=" PM";nhour-=12;}
                  if(nmin<=9) nmin="0"+nmin;
                     if(nsec<=9) nsec="0"+nsec;
                        document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
						document.getElementById("clockbox").style.fontSize = "x-large";
                          }
       window.onload=function(){
           GetClock();
          setInterval(GetClock,1000);
		  
                 }
    </script>
 <br> <div id="clockbox" style="text-align: center;" > </div> </br>
 <p align="center" >
<font size="20" > <marquee behavior="alternate">Welcome </marquee></font></p>
</font>
</html>
