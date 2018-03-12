<html>
<body>
<?php
 

$servername="127.0.0.1";
$username="root";
$password="";


 $con = mysqli_connect("localhost", "root", "", "cd"); 
    if (!$con) { 
        die('Could not connect: ' . mysql_error()); 
    } 


session_start();
$cate=$_SESSION['go'];
$n=$_SESSION['name'];
$p=$_SESSION['pass'];
$b=$_SESSION['b']; //to array me to onoma 
$c=$_SESSION['c']; //array me ta kostoi
$a=$_SESSION['a'];//array to artist
 $sql = "SELECT name,surname,numbank,password FROM user";
$result = mysqli_query($con, $sql);




if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      if( $n == $row["name"] and $p == $row["password"]  ){
        $m=$row["numbank"];
        }
} }
$arrlength = count($b);

 for($x = 0; $x <$arrlength; $x++) {
$k=$a[$x];
$g=$c[$x];
$l=$b[$x];
$q=$cate[$x];
mysqli_query($con, "INSERT INTO buy VALUES ('$k','$l','$g','$n','$m','$q',NOW());");
 }
 

 mysqli_close($con);

echo "order completed";
readfile('central.html');
?>


</body>
</html>