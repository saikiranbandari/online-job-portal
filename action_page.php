
 <?php
$email=$_REQUEST['e1'];
$password=$_REQUEST['psw'];
 mysql_connect("localhost","root","") or die("Unable to connect to database");
 mysql_select_db("jobportal") or die("Unable to select jobportal database");
if($email=="" || $password=="")
		{
			$err="<font color='red'>fill all the fileds first</font>";
		}
 $sql= mysql_query("select * from signup where email='$email' and password='$password'");
 $r=mysql_num_rows($sql);		
		
if($r==true)

 {
	
	 header('Location: users.php');
 }#echo "one record inserted";
else
{
echo "wrong password";
}
 mysql_close();
 ?>
