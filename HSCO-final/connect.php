<?php
$mysqli = new mysqli('localhost','databasename');
 
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
 
echo 'Success... ' . $mysqli->host_info . "<br />";
echo 'Retrieving dumpfile' . "<br />";
 
$sql = file_get_contents('../hsco.sql');
if (!$sql){
	die ('Error opening file');
}
 
echo 'processing file <br />';
mysqli_multi_query($mysqli,$sql);
 
echo 'done.';
$mysqli->close();
?>
