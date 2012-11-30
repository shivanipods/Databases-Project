<?php 

 // Connects to your Database 

 mysql_connect("localhost", "root") or die(mysql_error()); 

 mysql_select_db("mysql") or die(mysql_error()); 
 if(isset($_COOKIE['ID_my_site'])) 

 { 

 	$username = $_COOKIE['ID_my_site']; 

 	$pass = $_COOKIE['Key_my_site']; 
	$result = mysql_query("SELECT User FROM user") or die(mysql_error());
	
	if ($username == "admin")
	{
		
		echo "<table  border='1' style='border-collapse: collapse; border-color:silver;'>";
		while ($row = mysql_fetch_array($result,MYSQL_ASSOC)){
		echo "<tr>";
		echo "<td align='center' width='200'>" . $row['User'] . "</td>";
		echo "</tr>";
		}
		mysql_free_result($result);
		echo "</table>";

	}	
	//	print_r ($array);
	else
	{
		echo "You are Not Admin";
		header("Location:index.html");
	}
}	
	else
	{
	echo "You are Not Logged In";
	header("Location:login.php");
	}
	?>
<form action="grant_priv.html" method="post"> <br />
Enter Username to grant Priviliges : <input type="text" name="username"/>
<br />
<input type="submit" />
</form>
