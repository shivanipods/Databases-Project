<?php

$usr = $_COOKIE["cookuser"];

if ( isset($_POST['submit']))
{
	if( isset($_POST['insert']))
	{
	$sql = "GRANT INSERT ON * . * TO 'usr'@'localhost'"; 
	$result= mysql_query($sql);
	if (!$result)
	{
	$error =  "error in granting privileges";
	error_log($error);
	}
	echo "Insert Granted";
	}
	
	if(isset ($_POST['delete']))
	{
	$sql = "GRANT DELETE ON * . * TO 'usr'@'localhost'"; 
	$result= mysql_query($sql);
	if (!$result)
	{
	$error =  "error in granting privileges";
	error_log($error);
	}
	echo "Delete Granted";
	}
	
	if(isset($_POST['update']))
	{
	$sql = "GRANT UPDATE ON * . * TO 'usr'@'localhost'"; 
	$result= mysql_query($link,$sql);
	if (!$result)
	{
	$error =  "error in granting privileges";
	error_log($error);
	}
	echo "Update Granted";
	}
	}
	
?>
	