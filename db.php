<html>
 <body>
  <?php 
	mysql_connect("localhost","root","") or die("Unable to connect database");
    $q="create database jobportal";
	mysql_query($q) or die("Unable to execute the query");
	echo "jobportal database created";
	mysql_close();
   ?>
  </body>
 </html>