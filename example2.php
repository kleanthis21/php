
 

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<body>
 <?php 
 $con = mysqli_connect("localhost", "root", "", "cd"); 
    if (!$con) { 
        die('Could not connect: ' . mysql_error()); 
    } 
    session_start();
    $n=$_GET['artist'];
    
    $m=0;
    $sql = "SELECT artist,cost,title,category FROM pop";
    $result = mysqli_query($con, $sql); 
   
   $sql1 = "SELECT artist,cost,title,category FROM hiphop";
    $result1 = mysqli_query($con, $sql1); 
    
    $sql2 = "SELECT artist,cost,title,category FROM rock";
    $result2 = mysqli_query($con, $sql2); 
    
    
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if( $n == $row["artist"] ){
        $m=$row["cost"];
        $a=$row["title"];
        $j=$row['category'];
        } 
        }
} 
if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result1)) {
        if( $n == $row["artist"] ){
        $m=$row["cost"];
        $a=$row["title"];
        $j=$row['category'];
        } 
        }
} 
if (mysqli_num_rows($result2) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result2)) {
        if( $n == $row["artist"] ){
        $m=$row["cost"];
        $a=$row["title"];
        $j=$row['category'];
        } 
        }
} 
   $category=$_SESSION['go'];
   $costs=$_SESSION['c'];
  $basket=$_SESSION['b'];
  $artist=$_SESSION['a'];
  array_push($category,"$j");
array_push($basket,"$n");
array_push($costs,"$m");
array_push($artist,"$a");
$arrlength = count($basket);

for($x = 0; $x <$arrlength; $x++) {
    echo $basket[$x];
    echo $artist[$x];
    echo $costs[$x];
    echo $category[$x];
    echo "<br>";
}


echo "<br>";
echo array_sum($costs)."$";
echo "<br>";
$_SESSION['go']=$category;
 $_SESSION['b']=$basket;
  $_SESSION['c']=$costs;
   $_SESSION['a']=$artist;
  ?>
  <form action="remove.php" method="post">
<input value="Remove basket" type="submit">
</form>
 <form action="central.html" method="POST">
 <input value="Back" type="submit">
 </form>
 </form>
 <form action="example.php" method="POST">
 <input value="Buy" type="submit">
 </form>
</body> 
  </html>