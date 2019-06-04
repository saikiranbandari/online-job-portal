<?php
$con = mysqli_connect('localhost','root','','multiuser');
session_start();
if(!$_SESSION["user_name"])
{
	echo"<script>window.open('login5.php','_self)</script>";
}
elseif($_SESSION['type']!=='Employer')
{
	echo"<script>window.open('login5.php','_self)</script>";
}
	else 
	{		
      $user_name=$_SESSION['user_name'];
	}
	?>
	




<html>



<p> welcome employer</p>



</html>