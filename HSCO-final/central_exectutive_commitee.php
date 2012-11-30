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


$sql="INSERT INTO central_executive_committee (Term,Name,Designation)
VALUES
('$_POST[Term]','$_POST[Name]','$_POST[Designation])";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con);
?>