<html><head><title>HSCO DOMAINS</title></head><body background = "new.jpg">
<?php
$db_host = 'localhost';
$db_user = 'root';


$database = 'hsco';
$table = 'Domain';

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

<form action="delete_domain.php" method="post"> <br />
Enter UniqueID : <input type="text" name="id"/>
<br />
<input type="submit" />
</form>
</body></html>