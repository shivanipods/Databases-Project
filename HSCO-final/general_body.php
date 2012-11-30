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


$sql="INSERT INTO general_body (Name,UniqueID,Contact_no,Belongs_to,Headed_by)
VALUES
('$_POST[Name]','$_POST[UniqueID]','$_POST[Contact_no]','$_POST[Belongs_to]','$_POST[Headed_by]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con);
?>