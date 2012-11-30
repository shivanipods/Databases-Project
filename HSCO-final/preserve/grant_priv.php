<?php
echo $_COOKIE["cook"];
$test = $_COOKIE['cook'];
if ( $test == 1)
{
echo "here";

$cook_usr=$_POST['username'];
setcookie("cookuser",$cook_usr);
$usr = $_COOKIE['cookuser'];

header ("Location:grant_priv.html");
}


echo "at 2";


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
	echo "Granted Insert Priviledges";
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
	echo "Granted Delete Priviledges";
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
		echo "Granted Update Priviledges";

	}
	}
	
	?>
	