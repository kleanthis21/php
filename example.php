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
 $sql = "SELECT title,artist,year,company,cost FROM pop";
$result = mysqli_query($con, $sql);

 ?>
    <table cellpadding="2" cellspacing="2" border="0">
        <tr>
            <th>title</th>
            <th>artist</th>
            <th>year</th>
            <th>company</th>
            <th>cost</th>
            
       </tr>
    <?php if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row["title"]; ?></td>
            <td><?php echo $row["artist"]; ?></td>
            <td><?php echo $row["year"]; ?></td>
            <td><?php echo $row["company"]; ?></td>
            <td><?php echo $row["cost"]; ?></td>
            <td><a href='example2.php?artist=<?php echo $row["artist"]; ?>'>a</a></td>
            
            </tr>
        <?php } 
        }
     ?>   
        </table>
 
 
</body>
</html>