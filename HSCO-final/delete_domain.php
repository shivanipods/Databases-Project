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

mysql_query("DELETE FROM Domain WHERE UniqueID = '$_POST[id]'");

mysql_close($con);
?>
<a href = "./view.php">View modified Table</a>
</body>
</html>