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

$con = mysqli_connect("localhost", "root", "", "cd"); 
    if (!$con) { 
        die('Could not connect: ' . mysql_error());}
 ?>
        
<form action="admin.php" method="POST">
<input value="All buys" type="submit">
<br>
</form>
<form action="delete.php" method="POST">
<input value="Delete user" type="submit">
<br>
</form>
<form action="rock.php" method="POST">
<input value="All rock cds" type="submit">
<br>
</form>
<form action="hiphop.php" method="POST">
<input value="All hiphop cds" type="submit">
<br>
</form>
<form action="pop.php" method="POST">
<input value="All pop cds" type="submit">
<br>
</form>
<form action="add1.html" method="POST">
<input value="Add cd" type="submit">
</form>
<form action="deletecd.php" method="POST">
<input value="Delete cd" type="submit">
</form>






</body>
</html>   