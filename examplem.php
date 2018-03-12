<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<body>
  <?php 
  

session_start();

$artist = array(); 
$_SESSION['a']=$artist;
$basket = array(); 
$_SESSION['b']=$basket;

$costs = array(); 
$_SESSION['c']=$costs;
  
  $category = array(); 
$_SESSION['go']=$category;
  
  
  
  $_SESSION['name']=$n;
  $_SESSION['pass']=$p;
  
        header("Location: http://localhost:8080/example.php");
  
  ?>
  </body>
  </html>