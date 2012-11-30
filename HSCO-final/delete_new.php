<html>
<body>
 <?php
$con = mysql_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("hsco", $con);

mysql_query("DELETE FROM Domain WHERE ID='$_POST[UniqueID]'");

mysql_close($con);
?>
Record Deleted
<a href="./View.php">View Table</a>

</body>
</html>
