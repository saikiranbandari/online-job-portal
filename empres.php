<html>
<body><?php
 mysql_connect("localhost","root","") or die("Unable to connect to database");
 mysql_select_db("jobportal") or die("Unable to select database");
 $q="select * from employer_reg";
 $res=mysql_query($q) or die("Unable to Execute query");
 $n=mysql_num_rows($res);
 if($n>0)
 {
  echo "<table border='1' height='50%' width='50%' style='font-size:20pt'>";
  echo "<tr><th>companyname</th><th>contactperson</th><th>address</th><th>city</th><th>email</th><th>mobile</th><th>areaofwork</th><th>position</th><th>experiance</th><th>skills</th></tr>";
  for($r=1;$r<=$n;$r++)
  {
	  $row=mysql_fetch_array($res);
  echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>$row[4]</td><td>$row[5]</td><br/><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td></tr>";
  }
  echo "</table>";
 }
 else
 echo "No records are found in the table";
?>
</html>
</body>