<?php
$email=$_REQUEST['e1'];
$password=$_REQUEST['p1'];
$repeatpassword=$_REQUEST['p2'];
 mysql_connect("localhost","root","") or die("Unable to connect to database");
 mysql_select_db("jobportal") or die("Unable to select jobportal database");
 $q = "insert into signup values ('$email','$password','$repeatpassword')";
 if(mysql_query($q))
 {
	 header('Location: login.php');
 }#echo "one record inserted";
 else
 {
	 error;
 }
 mysql_close();
 ?>
 
 