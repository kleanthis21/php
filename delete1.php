<html>
<body>
<?php

$servername="127.0.0.1";
$username="root";
$password="";

$x=$_POST["name"];
 $con = mysqli_connect("localhost", "root", "", "cd"); 
    if (!$con) { 
        die('Could not connect: ' . mysql_error()); }
        
         $sql = "DELETE FROM user where name='$x'";
$result = mysqli_query($con, $sql);
echo "the user was deleted";

     
      ?>
       <form action="delete.php" method="POST">
<input value="Back" type="submit">
</form>
      </body>
      </html>
    
    
        