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
            <td><a href='basket.php?artist=<?php echo $row["artist"]; ?>'>buy!</a></td>
            
            </tr>
        <?php } 
        }
     ?>   
        </table>
 

 </form>
 <form action="central.html" method="POST">
 <input value="Back" type="submit">
 </form>
 
</body>
</html>