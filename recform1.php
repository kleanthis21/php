<?php 
     $n=$_POST["n"];
     $s=$_POST["s"];
     $p=$_POST["p"];
     $e=$_POST["e"];
     $nb=$_POST["nb"];
     $a=$_POST["a"];

$servername="127.0.0.1";
$username="root";
$password="";

 $con = mysqli_connect("localhost", "root", "", "cd"); 
    if (!$con) { 
        die('Could not connect: ' . mysql_error()); 
    } 

 mysqli_query($con, "INSERT INTO user VALUES ('$n','$s','$p','$e','$nb','$a');");

 mysqli_close($con);
     
echo "Account created"; 
 readfile('eisodos.html');





      ?>