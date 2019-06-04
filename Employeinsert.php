<?php

	$CompanyName=$_REQUEST['txtName'];
	$ContactPerson=$_REQUEST['txtPerson'];
	$Address=$_REQUEST['txtAddress'];
	$City=$_REQUEST['txtCity'];
	$Email=$_REQUEST['txtEmail'];
	$Mobile=$_REQUEST['txtMobile'];
	$Area=$_REQUEST['txtAreaWork'];
	$position=$_REQUEST['position'];
	$experiance=$_REQUEST['ex'];
	$skills=$_REQUEST['sk'];
	 mysql_connect("localhost","root","") or die("Unable to connect to database");
 mysql_select_db("jobportal") or die("Unable to select jobportal database");
	$q = "insert into employer_reg values('$CompanyName','$ContactPerson','$Address','$City','$Email','$Mobile','$Area','$position','$experiance','$skills')";
	 if(mysql_query($q))
 {
	 header('Location: empredistration.php');
 }#echo "one record inserted";
 else
 {
	 error;
 }
 mysql_close();
 ?>
