<html>
   
   <head>
      <title>Add New Record in MySQL Database</title>
   </head>
   
   <body>
      <?php
         if(isset($_POST['add']))
         {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn )
            {
               die('Could not connect: ' . mysql_error());
            }
            
            if(! get_magic_quotes_gpc() )
            {
               $name = addslashes ($_POST['name']);
               $address = addslashes ($_POST['address']);
            }
            else
            {
               $name = $_POST['name'];
               $address = $_POST['address'];
            }
            
            $salary = $_POST['salary'];
            
            $sql = "INSERT INTO employee ". "(name,address,salary) ". "VALUES('$name','$address',$salary)";
               
            mysql_select_db("data");
            $retval = mysql_query( $sql);
            
            if(! $retval )
            {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "Entered data successfully\n";
            
            mysql_close($conn);
         }
         else
         {
            ?>
            
               <form method="post" action="<?php $_PHP_SELF ?>">
                  <table width="400" border="0" cellspacing="1" cellpadding="2">
                  
                     <tr>
                        <td width="100">Employee Name</td>
                        <td><input name="name" type="text" id="name"></td>
                     </tr>
                  
                     <tr>
                        <td width="100">Employee Address</td>
                        <td><input name="address" type="text" id="address"></td>
                     </tr>
                  
                     <tr>
                        <td width="100">Employee Salary</td>
                        <td><input name="salary" type="text" id="salary"></td>
                     </tr>
                  
                     <tr>
                        <td width="100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width="100"> </td>
                        <td>
                           <input name="add" type="submit" id="add" value="Add Employee">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            
            <?php
         }
      ?>
   
   </body>
</html>