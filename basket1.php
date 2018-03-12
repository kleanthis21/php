<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
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
  session_start();
   $category=$_SESSION['go'];
   $costs=$_SESSION['c'];
  $basket=$_SESSION['b'];
  $artist=$_SESSION['a'];
  
  $arrlength = count($basket);


?>
<table cellpadding="3" cellspacing="3" border="0">
        <tr>
            
            <th>artist</th>
            <th>title</th>
            <th>category</th>
            <th>cost</th>
            
       </tr>
<?php
for($x = 0; $x <$arrlength; $x++) { ?>
    
       <tr>
            <td><?php echo $basket[$x]; ?></td>
            <td><?php echo $artist[$x]; ?></td>
            <td><?php echo $category[$x]; ?></td>
            <td><?php echo $costs[$x]; ?></td>
            <td><a href='removebasket.php?artist=<?php echo $basket[$x]; ?>'>remove</a></td>
            </tr>
            
    <!--echo $basket[$x];
    echo $artist[$x];
    echo $costs[$x];
    echo $category[$x];
    echo "<br>";-->
<?php } ?>
<tr><td></td>
<td></td>
<td></td>
   <td>   </td></tr>
   <tr><td></td>
<td></td>
<td></td>
   <td>  <?php echo array_sum($costs)."$"; ?> </td></tr>
</table>
<?php
echo "<br>";
?>
<form action="remove.php" method="post">
<input value="Remove basket" type="submit">
</form>
 <form action="central.html" method="POST">
 <input value="Back" type="submit">
 </form>
 </form>
 <form action="savebasket.php" method="POST">
 <input value="Buy" type="submit">
 </form>
</body>
</html>