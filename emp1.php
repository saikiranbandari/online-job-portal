<?php
$fn=$_REQUEST['data_3'];
$ln=$_REQUEST['data_4'];
$email=$_REQUEST['data_5'];
$number=$_REQUEST['data_6'];
$position=$_REQUEST['data_9'];
$resume=$_REQUEST['data_10'];
$website=$_REQUEST['data_11'];
$salary=$_REQUEST['data_12'];
$comments=$_REQUEST['data_16'];
$username=$_REQUEST['txtUserName'];
$password=$_REQUEST['txtPassword'];
$usertype=['JobSeeker'];
 mysql_connect("localhost","root","") or die("Unable to connect to database");
 mysql_select_db("job") or die("Unable to select jobportal database");
 $q = "insert into employer_reg values ('$fn','$ln','$email','$number','$position','$resume','$website','$salary','$comments','$username','$password')";
 /*mysql_query($q) or die("Unable to execute the query");
 echo "one record inserted";
 mysql_close();
 ?>*/
  if(mysql_query($q))
 {
	 header('Location: jobregdone.php');
 }#echo "one record inserted";
 else
 {
	 error;
 }
 mysql_close();
 ?>