<html>
<body>
    <head>
        <style>
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
            </style>
        </head>
<?php

$servername="127.0.0.1";
$username="root";
$password="";


 $con = mysqli_connect("localhost", "root", "", "cd"); 
    if (!$con) { 
        die('Could not connect: ' . mysql_error()); }
        
         $sql = "SELECT name,surname,password,email,numbank,address FROM user";
    $result = mysqli_query($con, $sql);
     ?>
    <table cellpadding="2" cellspacing="2" border="0">
        <tr>
            <th>name</th>
            <th>username</th>
            <th>password</th>
            <th>email</th>
            <th>numbank</th>
            <th>address</th>
       </tr>
   <?php if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) { ?>
     <tr>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["surname"]; ?></td>
            <td><?php echo $row["password"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["numbank"]; ?></td>
            <td><?php echo $row["address"]; ?></td>
            </tr>
        <?php } 
        }
     ?>   
        </table>
        <div>
<form action="delete1.php" method="POST">
<input type="text" name="name" required>
<input value="delete" type="submit">
</form>
<form action="admin1.php" method="POST">
<input value="back" type="submit">
<br>
</form>
</div>

    







        
        
        
        
        
        
        
        
        
        
        
        
        
        

</body>
</html>