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


$sql="INSERT INTO activities (UniqueID,Name,Date,Location,Impacted,Domain)
VALUES
('$_POST[id]','$_POST[Name]','$_POST[Date]','$_POST[Location]','$_POST[Impacted]','$_POST[Domain]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";


mysql_close($con);
?>
<a href = "./view_insert_activities.php">View modified Table</a>