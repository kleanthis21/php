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

$x=$_POST["name"];
 $con = mysqli_connect("localhost", "root", "", "cd"); 
    if (!$con) { 
        die('Could not connect: ' . mysql_error()); }
        
        $sql = "SELECT artist,title,cost,name,numbank,date FROM buy";
    $result = mysqli_query($con, $sql);
    
    ?>
    <table cellpadding="2" cellspacing="2" border="0">
        <tr>
            <th>artist</th>
            <th>title</th>
            <th>cost</th>
            <th>name</th>
            <th>numbank</th>
            <th>date</th>
       </tr>
   <?php if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
     if($x==$row["name"]) {
                                      
        
        
         ?>
     <tr>
            <td><?php echo $row["artist"]; ?></td>
            <td><?php echo $row["title"]; ?></td>
            <td><?php echo $row["cost"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["numbank"]; ?></td>
            <td><?php echo $row["date"]; ?></td>
            </tr>
        <?php } 
        }  }
     ?>   
        </table>
         <form action="admin.php" method="POST">
<input value="Back" type="submit">
</form>
        </body>
        </html>