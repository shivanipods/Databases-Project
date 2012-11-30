<html>
<?php
$con = mysql_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("hsco", $con);

$result = mysql_query("SELECT * FROM Domain");

while($row = mysql_fetch_array($result))
  {
  
  echo $row['UniqueID'] . " " . $row['Name']." ;
  }

mysql_close($con);
?>
</h2>

<div class="table1">
<table width="300" border="5" align="center" cellpadding="5" cellspacing="5" bgcolor="RED">
<tr>
<form name="form1" method="post" action="delete.php">
<td>
<table width="100%" border="0" cellpadding="5" cellspacing="5" bgcolor="YELLOW">
<tr>
<td colspan="3"><strong>Insert Agency Details </strong></td>
</tr>
<tr>
<td width="78">UniqueID</td>
<td width="6">:</td>
<td width="294"><input name="UniqueID" type="text" id="UniqueID"></td>
</tr>
<!--<tr>
<td>Name</td>
<td>:</td>
<td><input name="Name" type="text" id="Name"></td>
</tr>
-->

<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Enter"></td>
</tr>
</table>

</td>
</form>
</tr>
</table>
</div>
</html>

