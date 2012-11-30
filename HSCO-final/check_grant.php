<?php 

 // Connects to your Database 

 mysql_connect("localhost", "root") or die(mysql_error()); 

 mysql_select_db("mysql") or die(mysql_error()); 
 if( isset($_REQUEST['formsubmit'])){
 echo "inside loop";
 $select=$_POST[$row['User']];
 if($select == "Yes"){
 header("Location:grant_priv.php");
 }
 else
 {
 }
 }
 ?>