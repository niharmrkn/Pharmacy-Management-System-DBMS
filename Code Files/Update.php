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
echo "<h1>Update....</h1><br>";
@$connect 	= mysqli_connect("localhost","root","","phplogin1") or die("couldn't connect!");


@$query2     = mysqli_query($connect,"SELECT * FROM StockAdj");

echo "<h3>select Product what you want to update :</h3>";
	echo "<br><form action='Update1.php' method='POST'><select name='sname'>";


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
	echo "<br><h3>to change Pname : </h3><br><input type='text' name='tochange'>";
	echo "<br><h3>to change Ptype : </h3><br><input type='text' name='ptype1'>";
	echo "<br><h3>to change Mfg_Date : </h3><br><input type='date' name='mdate1'>";
	echo "<br><h3>to change Exp_Date : </h3><br><input type='date' name='edate1'>";
	echo "<br><h3>to change PPS : </h3><br><input type='number' name='pps1'>";
	echo "<br><h3>to change Quantity : </h3><br><input type='number' name='quan1'>";


	echo "<br><br><input type='submit' name='c' value='change'>";

	echo "</form>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body background="pharmacy5a.png">
	<button><a href="stockadj.php">Back</a></button>
</body>
</html>