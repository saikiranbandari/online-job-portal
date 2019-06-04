<?php
$username=$_REQUEST['u1'];
$password=$_REQUEST['p2'];
 mysql_connect("localhost","root","") or die("Unable to connect to database");
 mysql_select_db("jobportal") or die("Unable to select jobportal database");
 $q = "insert into admin values ('$username','$password')";
 if(mysql_query($q))
 {
	 header('Location: admpage.php');
 }#echo "one record inserted";
 else
 {
	 error;
 }
 mysql_close();
 ?>
 
 