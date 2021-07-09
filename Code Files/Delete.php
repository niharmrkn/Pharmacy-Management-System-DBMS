<?php
echo "
<html>	
<head>
	<title>Stock Adjustment</title>
	<link rel='stylesheet' type='text/css' href='stockadjcss.css'>
</head>
<body background='pharmacy5.png'>
	<br><br><br><br><br><br>
		<ul>
		  <li><a href='Insert.php'>Insert</a></li>
		  <li><a href='Update.php'>Update</a></li>
		  <li><a href='Delete.php'>Delete</a></li>
		  <li class='b'><a href='stockadj.php'>Back</a></li>
		</ul>

</body>
</html>


";

echo "<h1>Delete....</h1><br>";

@$connect 	= mysqli_connect("localhost","root","","phplogin1") or die("couldn't connect!");


@$query2     = mysqli_query($connect,"SELECT * FROM StockAdj");

echo "<h3>Select Product what you want to update :</h3>";
	echo "<br><form action='Delete1.php' method='POST'><select name='dname'>";


	while (@$row = mysqli_fetch_assoc(@$query2)) 
	{
		@$dbpid = $row['PID'];
		@$dbpname = $row['Pname'];
		@$dbptype = $row['Ptype'];
		@$dbmfgdate = $row['Mfg_Date'];
		@$dbexpdate = $row['Exp_Date'];
		@$dbpps = $row['PPS'];
		@$dbquantity = $row['Quantity'];
		@$dbredate = $row['Re_Date'];
		echo "<option value='$dbpid'> $dbpid | $dbpname | $dbptype | $dbmfgdate | $dbexpdate | $dbpps | $dbquantity </option>";
	}
	echo "</select>";	

	echo "<br><br><input type='submit' name='c' value='Delete'>";

	echo "</form>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
</head>
<body background="pharmacy5a.png">
	<button>
		<a href="stockadj.php">Back</a>
	</button>
</body>
</html>