<html>
<body>
 <?php
 
 
 
 $servername="127.0.0.1";
$username="root";
$password="";

$x=$_POST["artist"];
 $con = mysqli_connect("localhost", "root", "", "cd"); 
    if (!$con) { 
        die('Could not connect: ' . mysql_error()); }
        
         
          $sql = "DELETE FROM rock WHERE artist='$x'";
        
$result = mysqli_query($con, $sql);

 $sql2 = "DELETE FROM pop WHERE artist='$x'";
        
$result2 = mysqli_query($con, $sql2);

 $sql3 = "DELETE FROM hiphop WHERE artist='$x'";
        
$result3 = mysqli_query($con, $sql3);


echo "the cd was deleted";
?>
<form action="admin1.php" method="post">
<input value="back" type="submit">
</form>
 
 
 
 
 
 
 
 
 
 </body>    
 </html>