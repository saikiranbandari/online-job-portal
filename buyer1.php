<html>
	<body><?php
			mysql_connect("localhost","root","") or die("Unable to connect to database");
			mysql_select_db("jobportal") or die("Unable to select database");
			$q="select distinct position from resume";
			$res=mysql_query($q) or die("Unable to Execute query");
			$n=mysql_num_rows($res);
			if($n>0)
			{
			echo "<table border='1' height='30%' width='30%' style='font-size:10pt'>";
			echo "<tr><th>AVAILABLE position</th></tr>";
			for($r=1;$r<=$n;$r++)
			{
				$row=mysql_fetch_array($res);
				echo "<tr><td>".$row[0]."</td></tr>";
			}
			echo "</table>";
			}
				else
				echo "No records are found in the table";
			?>
		<form action="buyer2.php" method="post">
			Enter the postion:<input type="text" name="data_9"><br>
			<input type="submit" value="submit">
		</form>
	</body>	
</html>