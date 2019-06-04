<html>


<body>
<form method="post" action="">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    
	<hr>
  <fieldset>
    <input type="text" placeholder="Name"  name="Name"/></fieldset>

    <fieldset>
    <input type="text" placeholder="username"  name="username"/></fieldset>

<fieldset>    <input type="password" placeholder=" Password" name="password"/></fieldset>
    <fieldset>
	 <select name="role"><option value="" selected>select role</option>
                          <option value="Employer">Employer</option>
						  <option value="JobSeeker">JobSeeker</option>
                          </select>
	
	
	
	</fieldset>
 <fieldset>
      <input type="submit" value="sign up free" name="save"/></fieldset>
</form>
</body>
</html>
<?php
$con = mysqli_connect('localhost','root','','multiuser');
if(isset($_POST['save']))
{
	$name=$_POST['Name'];
	$user_name=$_POST['username'];
	$pass=$_POST['password'];
	$type=$_POST['role'];
	$q=mysqli_query($con,"insert into user1(name,user_name,password,roll)values('$name','$user_name','$pass','$type')");
	if($q){
		echo" reg done   ";
	}
	else
	{
		echo"reg fail";
		
	}
}
	?> 
</html>