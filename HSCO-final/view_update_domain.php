<html><head><title>HSCO</title></head><body background="new.jpg">
<?php
$db_host = 'localhost';
$db_user = 'root';


$database = 'hsco';
$table = 'domain';

if (!mysql_connect($db_host, $db_user))
    die("Can't connect to database");

if (!mysql_select_db($database))
    die("Can't select database");

// sending query

$result = mysql_query("SELECT * FROM {$table}");
if (!$result) {
    die("Query to show fields from table failed");
}

$fields_num = mysql_num_fields($result);


echo "<h1>Table: {$table}</h1>";
echo "<table border='1'><tr>";
// printing table headers
for($i=0; $i<$fields_num; $i++)
{
    $field = mysql_fetch_field($result);
    echo "<td>{$field->name}</td>";
}
echo "</tr>\n";
// printing table rows
while($row = mysql_fetch_row($result))
{
    echo "<tr>";

    // $row is array... foreach( .. ) puts every element
    // of $row to $cell variable
    foreach($row as $cell)
        echo "<td>$cell</td>";

    echo "</tr>\n";
}
mysql_free_result($result);
?>

<form action="update_domain.php" method="post"> <br />
Enter Primary key of field : <input type="text" name="id"/>
<br />

Enter attribute to change : <input type="text" name="attr_id"/>
<br />

New Value: <input type="text" name="new"/>
<br />

<input type="submit" />
</form>
</body></html>
