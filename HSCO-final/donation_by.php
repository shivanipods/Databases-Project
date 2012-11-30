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


$sql="INSERT INTO donation_by (Name,Contact,DD_no)
VALUES
('$_POST[Name]','$_POST[Contact]','$_POST[DD_no]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con);
?>