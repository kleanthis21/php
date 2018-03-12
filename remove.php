<?php

session_start();
$basket = array(); 
$_SESSION['b']=$basket;

$costs = array(); 
$_SESSION['c']=$costs;

$artist = array(); 
$_SESSION['a']=$artist;



  
  $category = array(); 
$_SESSION['go']=$category;
readfile('central.html');
?>