<?php
session_start();
$con = mysqli_connect('localhost','root','','multiuser');
if(isset($_POST['login']))
{
	$user_name=$_POST['username'];
	$pass=$_POST['password'];
	$q=mysqli_fetch_array($con,"select * from user where user_name='$user_name' and password='$password'");
	$row=mysqli_fetch_array($q);
	$type=$row['roll'];
	$isexist=mysqli_query($con,"select * from user where user_name='$user_name' and password='$password'");
	$check_user=mysqli_num_rows($isexist);
	if($check_user=1){
		$_SESSION["type"]=$row['roll'];
		$_SESSION["user_name"]=$row['user_name'];
		if($type=="JobSeeker"){
			echo"<script>window.open('jobhome.php','_self')</script>";
		}
		else{
			echo "<script>window.open('emphome.php','_self')</script>";
		}
	}
else{
echo" invalid username or password";
}
}
