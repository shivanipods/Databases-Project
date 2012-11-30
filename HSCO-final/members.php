
<body background="new.jpg">
<?php 
 // Connects to your Database 

 mysql_connect("localhost", "root") or die(mysql_error()); 

 mysql_select_db("mysql") or die(mysql_error()); 

 
 //checks cookies to make sure they are logged in 

 if(isset($_COOKIE['ID_my_site'])) 

 { 

 	$username = $_COOKIE['ID_my_site']; 

 	$pass = $_COOKIE['Key_my_site']; 

 	 	$check = mysql_query("SELECT * FROM user WHERE User = '$username'")or die(mysql_error()); 
 	 	$check = mysql_query("SELECT * FROM user WHERE User = '$username'")or die(mysql_error()); 

 	while($info = mysql_fetch_array( $check )) 	 

 		{ 

 

 //if the cookie has the wrong Password, they are taken to the login page 

 		if ($pass != $info['Password']) 

 			{ 			header("Location: login.php"); 

 			} 

 

 //otherwise they are shown the admin area	 

 	else 

 			{ 

 			 echo "You are now a member of HSCO :)<p></br>"; 


 echo "<a href= index.html> Go to Home Page </a></br>";
 echo "<a href=logout.php>Logout</a>"; 

 			} 

 		} 

 		} 

 else 

 

 //if the cookie does not exist, they are taken to the login screen 

 {			 

 header("Location: login.php"); 

 } 

 ?> 
 </body>