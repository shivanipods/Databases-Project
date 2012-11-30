<html>
<body>
<?php
$con = mysql_connect("localhost","root");
echo 'connected to localhost';
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//link= mysql_connect('hsco');
//mysql_select_db('hsco', $link);

mysql_select_db('hsco',$con) or die(mysql_error()); 


$query=mysql_query("UPDATE domain SET $_POST[attr_id] = '$_POST[new]' WHERE UniqueID = '$_POST[id]'");
?>
<a href = "view_update_domain.php">View modified Table</a>
</body>
</html>
