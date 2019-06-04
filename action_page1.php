<?php
session_start();
$username=$_POST['uname'];
$Password=$_POST['psw'];
$UserType=$_POST['cmbUser'];
if($UserType=="Administrator")
{
$con = mysql_connect("localhost","root");
mysql_select_db("jobportal", $con);
$sql = "select * from user_master where UserName='".$uname."' and Password='".$Password."'" ;
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'f.php\';</script>';
}
else
{
header("location:.php");
} 
mysql_close($con);
}
else if($UserType=="JobSeeker")
{
$con = mysql_connect("localhost","root");
mysql_select_db("jobportal", $con);
$sql = "select * from resume where UserName='".$UserName."' and Password='".$Password."'";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'f.php\';</script>';
}
else
{
$_SESSION['email']=$row['data_5'];
$_SESSION['username']=$row['txtUserName'];
header("location:company2.php");
} 
mysql_close($con);
}

?>


