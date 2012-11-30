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


$sql="INSERT INTO organization (Name,Founded_in,Location,Domains,Branches,Undertaken_Activities)
VALUES
('$_POST[Name]','$_POST[Founded_in]','$_POST[Location]','$_POST[Domains]','$_POST[Branches]','$_POST[Undertaken_Activities]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con);
?>