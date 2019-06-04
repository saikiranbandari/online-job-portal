<!DOCTYPE html>
<html><head><link rel="stylesheet" href="mystyle.css">
<link rel="stylesheet" href="mylogin.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
.hero{
	height:100%;
	width:100%;
background:linear-gradient(rgba(26,26,26,0.3),rgba(26,26,26,0.3)),url("me.jpg");
	background-size:cover;
	background-repeat:no-repeat;
	background-position:center center;
	
}
body {
	
	
	margin:0;
	font-family: Ariel, helvetica, sans-serif;
}
form {
	margin:20px auto;
	width 320px; 
}
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
   font-size: 35px;
}
</style></head>
<body background="me.jpg">
<marquee behavior="scroll" 	font-family: "Ariel, helvetica, sans-serif"
 direction="left">❤❤wellcome❤❤.................❤❤wellcome❤❤</marquee>
<header>
 <div class="topnav">
                <h1 align="center" style="color:AQUA;">online job portal<h1>
                <a href="f.php">Home</a> 
                <a href="AboutUs.php">About Us</a>
                <a href="Employer1.php">Employer</a>
                 <a href="jobpage.php">Job Seeker</a>
                  <a href="News.php">Latest News</a>
                <a href="ContactUs.php">Contact Us</a>
				<ul><li style="float:right"><a href="signup.php">Register</a> 
								 <li style="float:right"><a class="active" href="login.php">login</a></li>
</li>
				
</ul>
			</div></header>
			<div class="wrap">
<form method="post" action="signupdp.php">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    
	<hr>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter valid Email"  name="e1" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password"  name="p1" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="p2" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
   

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
<a class="active" href="admin.php">adminlogin</a>
</div>

</body>
</html>
