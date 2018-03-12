<html>
    <head>
        <style>
              input[type=submit]:hover {
    background-color: #45a049;
                }
        input[type=submit]{
            width:100%;
            background-color:4CAF50;
            color:white;
            padding:14px 20px;
            margin:8px 0px;
            border:none;
            border-radius:4px;
            cursor:pointer;
        }
        div{border-radius:px;
        background-color:#f2f2f2;
        padding:4px;}
        input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
table{border-collapse:collapse;
            width:100%}
            th,td{textalign:left;
            padding:8px;}
            tr:nth-child(even){background-color:#f2f2f2}
            th{background-color:#4CAF50;
            color:white;}
             input[type=submit]:hover {
    background-color: #45a049;
                }
            </style>
            </head>
<body>  
<?php

$servername="127.0.0.1";
$username="root";
$password="";



 $x=$_POST["search"];
 $con = mysqli_connect("localhost", "root", "", "cd"); 
    if (!$con) { 
        die('Could not connect: ' . mysql_error()); 
    }
    
  $sql = "SELECT title,artist,year,company,cost,category FROM pop";
    $result = mysqli_query($con, $sql);
    
     $sql1 = "SELECT title,artist,year,company,cost,category FROM rock";
    $result1 = mysqli_query($con, $sql1);
    
     $sql2 = "SELECT title,artist,year,company,cost,category FROM hiphop";
    $result2 = mysqli_query($con, $sql2);
    
    ?>
    <table cellpadding="2" cellspacing="2" border="0">
        <tr>
            <th>title</th>
            <th>artist</th>
            <th>cost</th>
            <th>category</th>
            </tr>
   <?php
   if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
     if($x==$row["title"]) {
                                      
  ?>
     <tr>
            <td><?php echo $row["title"]; ?></td>
            <td><?php echo $row["artist"]; ?></td>
            <td><?php echo $row["cost"]; ?></td>
            <td><?php echo $row["category"]; ?></td>
             <td><a href='basket.php?artist=<?php echo $row["artist"]; ?>'>buy!</a></td>
            </tr> 
        <?php     }}    } 
        
  ?>
  </table> 
   <table cellpadding="2" cellspacing="2" border="0">
   <?php
   if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result1)) {
     if($x==$row["title"]) {
                                      
  ?>
     <tr>
            <td><?php echo $row["title"]; ?></td>
            <td><?php echo $row["artist"]; ?></td>
            <td><?php echo $row["cost"]; ?></td>
            <td><?php echo $row["category"]; ?></td>
             <td><a href='basket.php?artist=<?php echo $row["artist"]; ?>'>buy!</a></td>
            </tr> 
        <?php     }}    } 
        
  ?>
  </table>
   <table cellpadding="2" cellspacing="2" border="0">
        <?php
   if (mysqli_num_rows($result2) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result2)) {
     if($x==$row["title"]) {
                                      
  ?>
     <tr>
            <td><?php echo $row["title"]; ?></td>
            <td><?php echo $row["artist"]; ?></td>
            <td><?php echo $row["cost"]; ?></td>
            <td><?php echo $row["category"]; ?></td>
             <td><a href='basket.php?artist=<?php echo $row["artist"]; ?>'>buy!</a></td>
            </tr> 
        <?php     }}    } 
        
  ?>
  </table>
</form>
 <form action="central.html" method="POST">
<input value="Back" type="submit">
</form>    
  </body>
  </html>
     
    