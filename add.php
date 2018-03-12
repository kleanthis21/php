<html>
    
    
<body>
<?php

$servername="127.0.0.1";
$username="root";
$password="";

 $t=$_POST["t"];
 $a=$_POST["a"];
 $y=$_POST["y"];
 $c=$_POST["c"];
 $co=$_POST["co"];
 $ca=$_POST["ca"];


 $con = mysqli_connect("localhost", "root", "", "cd"); 
    if (!$con) { 
        die('Could not connect: ' . mysql_error()); }
        
        if($ca=="pop"){
            
            mysqli_query($con, "INSERT INTO pop VALUES ('$t','$a','$y','$c','$co','$ca');");
        }
        
        if( $ca == "rock" ){
            
            mysqli_query($con, "INSERT INTO rock VALUES ('$t','$a','$y','$c','$co','$ca');");
        }
         if( $ca == "hiphop" ){
            
            mysqli_query($con, "INSERT INTO hiphop VALUES ('$t','$a','$y','$c','$co','$ca');");
 
         }
 mysqli_close($con);   
 echo "the cd was inserted" ;
  
            
          
        ?>
        <form action="admin1.php" method="POST">
<input value="Back" type="submit">
</form>
 <form action="admin1.php" method="POST">
<input value="Back" type="submit">
</form>
        </body>
        </html>